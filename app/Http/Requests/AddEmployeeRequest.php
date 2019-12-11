<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AddEmployeeRequest extends FormRequest
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
            'designation_id' => [
                'required',
                'integer',
                Rule::notIn(['0', '0']),
            ],
            'name' => 'required|string|unique:employees',
            'phone' => 'required|max:20',
            'email' => 'required|email|unique:employees|max:50',
            'birthday' => 'required|date',
            'gender' => 'required',
            'addres'=>'required',
            'avatar' => 'mimes:jpeg,jpg,png|max:300',
            'join' => 'required',
            'salary' => 'required'
        ];
    }
}
