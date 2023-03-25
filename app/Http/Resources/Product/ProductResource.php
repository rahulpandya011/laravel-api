<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product_id' => $this->product_id,
            'name' => $this->name,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'image' => $this->image,
            'product_variations' => $this->product_variations->map(function ($value, $key) {
                return [
                    'product_variation_id' => $value->product_variation_id,
                    'attribute_variation_name' => !empty($value->attribute_variation) ? $value->attribute_variation->name : '',
                    'attribute_name' => !empty($value->attribute_variation) ? (!empty($value->attribute_variation->attribute) ? $value->attribute_variation->attribute->name : '') : '',
                ];
            })
        ];
    }
}
