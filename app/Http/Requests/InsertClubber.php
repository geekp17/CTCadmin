<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertClubber extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'mobileNo' =>'required|size:10',
            'address' => 'required',
            'dob' => 'required'
        ];
    }
}
