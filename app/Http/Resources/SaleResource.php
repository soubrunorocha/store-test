<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return array_merge(
            parent::toArray($request),
            $this->when(
                $request->report == true,
                [
                        'customer' => $this->customer,
                        'seller' => $this->seller,
                        'products' => SaleProductResource::collection($this->sale_products),
                    ],
                []
            )
        );
    }
}
