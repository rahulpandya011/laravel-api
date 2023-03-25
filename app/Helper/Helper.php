<?php

namespace App\Helper;

class Helper
{
    /**
     * From this Function we will going to return all Response
     */
    public static function responseData($code, $message, $data = [])
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
