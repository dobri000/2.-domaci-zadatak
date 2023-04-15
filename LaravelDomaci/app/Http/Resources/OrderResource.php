<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public static $wrap = 'order';

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'customer' => new CustomerResource($this->resource->customer),
            'product' => new ProductResource($this->resource->product),
            'quantity' => $this->resource->quantity
        ];
    }
}
