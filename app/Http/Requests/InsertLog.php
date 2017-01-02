<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertLog extends FormRequest
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
            'lugger_id' => 'required',
            'venue' => 'required',
            'date' => 'required',
            'studyTaken' => 'required',
            'efforts' => 'required'
        ];
    }
}
