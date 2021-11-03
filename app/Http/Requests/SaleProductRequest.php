<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleProductRequest extends BaseFormRequest
{
     /**
     * Get the validation rules that apply to the post request.
     *
     * @return array
     */
    public function store()
    {
        return [
            'product_id' => 'required|string|max:255|exists:products,id',
            'quantity' => 'required|numeric',
        ];
    }

     /**
     * Get the validation rules that apply to the put/patch request.
     *
     * @return array
     */
    public function update()
    {
        return [
            'product_id' => 'prohibited',
            'quantity' => 'required|numeric',
        ];
    }
}
