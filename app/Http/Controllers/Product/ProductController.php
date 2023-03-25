<?php

namespace App\Http\Controllers\Product;

use App\Helper\Helper;
use App\Http\Controllers\Controller;

use App\Http\Resources\Product\{
    ProductResource,
    ProductListCollection
};

use App\Models\Products;
use Exception;

use Illuminate\Http\{
    Request,
    Response
};


class ProductController extends Controller
{
    /**
     * Product Listing
     *
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     * @description This will return list of product with pagination
     */

    public function index(Request $request)
    {
        try {
            $data = Products::paginate(Products::PAGINATION_LENGTH);

            return Helper::responseData(
                Response::HTTP_OK,
                "Product List Get Success",
                new ProductListCollection($data),
            );
        } catch (Exception $e) {
            return Helper::responseData(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                $e->getMessage()
            );
        }
    }

    /**
     * Product Listing
     *
     * @param App\Http\Requests\Api\Product\ProductDetailRequest
     * @return \Illuminate\Http\JsonResponse
     * @description This will Detail of Product if not there then will retun error
     */

    public function show(Request $request, $id)
    {
        try {
            $product = Products::find($id);
            if (empty($product)) {
                return Helper::responseData(
                    Response::HTTP_UNPROCESSABLE_ENTITY,
                    "Product Not Found",
                );
            }
            return Helper::responseData(
                Response::HTTP_OK,
                "Product List Get Success",
                new ProductResource($product),
            );
        } catch (Exception $e) {
            return Helper::responseData(
                Response::HTTP_INTERNAL_SERVER_ERROR,
                $e->getMessage()
            );
        }
    }
}
