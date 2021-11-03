<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'value' => $this->value,
            'name' => $this->product->name,
            'custom_id' => $this->product->custom_id,
            'batch_number' => $this->product->batch_number,
            'color' => $this->product->color,
            'description' => $this->product->description,
        ];
    }
}
