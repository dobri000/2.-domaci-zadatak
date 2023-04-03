<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap = 'product';
    
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->resource->id,
            'product_name' => $this->resource->product_name,
            'price' => $this->resource->price
        ];
    }
}
