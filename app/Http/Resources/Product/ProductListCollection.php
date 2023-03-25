<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductListCollection extends ResourceCollection
{
    private $pagination;

    public function __construct($resource, $pagination_links = true)
    {
        if ($pagination_links) {
            $this->pagination = [
                'total' => $resource->total(),
                'count' => $resource->count(),
                'per_page' => $resource->perPage(),
                'current_page' => $resource->currentPage(),
                'last_page' => $resource->lastPage(),
                'hasMorePages' => $resource->hasMorePages(),
            ];
            $resource = $resource->getCollection();
        }

        parent::__construct($resource);
    }
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $collection = [
            'product_list' => $this->collection->map(function ($value, $key) {
                return new ProductResource($value);
            }),
        ];

        if (is_array($this->pagination)) {
            $collection['pagination'] = $this->pagination;
        }

        return  $collection;
    }
}
