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
            'mobileNo' =>'size:10|unique:clubbers',
        ];
    }

    public function messages(){
      return [
        'mobileNo.unique' => 'Clubber already in database.'
      ];
    }
}
