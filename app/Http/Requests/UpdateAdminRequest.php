<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'name'            => ['required', 'max:200'],
            'email'           => ['required', 'max:150', 'unique:admins,email,'.$this->admin->id],
            'mobile'           => ['required', 'max:10','regex:/^(([-0-9()\sx.]{4,19})([0-9]))$/'],
            'role'            => ['required'],
            'department' => ['max:200'],
            'image'           => ['image','mimes:jpeg,png,jpg','max:2048'],
        ];
    }
}
