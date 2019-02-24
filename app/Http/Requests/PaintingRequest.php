<?php

namespace App\Http\Requests;

class PaintingRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $regex = '/^[A-Za-z0-9-éèàù]{1,50}?(,[A-Za-z0-9-éèàù]{1,50})*$/';
        $id = $this->painting ? ',' . $this->painting->id : '';

        return $rules = [
            'title' => 'bail|required|max:255',
            'body' => 'bail|required|max:65000',
            'image' => 'bail|required|max:255'
        ];
    }
}
