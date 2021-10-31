<?php

namespace App\Http\Requests;

class CustomerRequest extends BaseFormRequest
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
            'tax_number' => 'required|string|max:255|'.
                'unique:customers,tax_number,'.($this->customer->id ?? '').',id,deleted_at,NULL',
            'birth_date' => 'required|date',
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
