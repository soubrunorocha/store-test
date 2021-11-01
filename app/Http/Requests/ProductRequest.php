<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the post request.
     *
     * @return array
     */
    public function store()
    {
        return [
            'name' => 'required|string|max:255',
            'custom_id' => 'required|string|max:255|'.
                'unique:products,custom_id,'.($this->product->id ?? '').',id,deleted_at,NULL',
            'batch_number' => 'required|numeric',
            'color' => 'required|string',
            'description' => 'required|string|max:65535',
            'value' => 'required|numeric'
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
