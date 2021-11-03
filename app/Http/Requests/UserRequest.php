<?php

namespace App\Http\Requests;

class UserRequest extends BaseFormRequest
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
            'email' => 'required|string|max:255|email|'.
                'unique:users,email,'.($this->user->id ?? '').',id,deleted_at,NULL',
            'password' => 'required|string|max:255',
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
