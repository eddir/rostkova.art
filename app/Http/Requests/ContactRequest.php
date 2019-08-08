<?php

namespace App\Http\Requests;

class ContactRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|max:255',
            'type' => 'required',
            'address' => 'required',
            'message' => 'max:1000',
            'confirm' => 'required|accepted'
        ];
    }
}
