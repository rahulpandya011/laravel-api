<?php

namespace App\Http\Controllers\Auth;

use App\Helper\Helper;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\Api\Auth\LoginResource;

use App\Models\User;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * User Login
     *
     * @param App\Http\Requests\Api\Auth\LoginRequest
     * @return \Illuminate\Http\JsonResponse
     * @description This function will check username and password
     * if it is okay then login other wise return message
     */
    public function checkLogin(LoginRequest $request)
    {
        try {
            $validated = $request->validated();

            $user = User::where('email', '=', $validated['email'])->first();
            if (empty($user)) {
                return Helper::responseData(
                    Response::HTTP_UNPROCESSABLE_ENTITY,
                    "User Not Found"
                );
            }

            if ($user->status == User::STATUS_INACTIVE) {
                return Helper::responseData(
                    Response::HTTP_UNPROCESSABLE_ENTITY,
                    "User has been inactivated, please contact admin"
                );
            }

            if (!Hash::check($validated['password'], $user->password)) {
                return Helper::responseData(
                    Response::HTTP_UNPROCESSABLE_ENTITY,
                    "Wrong Password"
                );
            }
            return Helper::responseData(
                Response::HTTP_OK,
                "Logged in Successfully",
                new LoginResource($user)
            );
        } catch (Exception $e) {
            return Helper::responseData(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                $e->getMessage()
            );
        }
    }
}
