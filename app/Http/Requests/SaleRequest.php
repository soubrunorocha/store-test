<?php

namespace App\Http\Requests;

class SaleRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the post request.
     *
     * @return array
     */
    public function store()
    {
        return [
            'customer_id' => 'required|string|exists:customers,id',
            'seller_id' => 'required|string|exists:users,id'
        ];
    }

     /**
     * Get the validation rules that apply to the put/patch request.
     *
     * @return array
     */
    public function update()
    {
        return $this->store();
    }
}
