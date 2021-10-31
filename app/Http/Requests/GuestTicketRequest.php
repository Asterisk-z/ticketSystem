<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestTicketRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required',//|unique:users,email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'A username is required',
            'email.required' => 'An email is required',
            'subject.required' => 'A subject is required',
            'message.required' => 'A message is required',
            'email.unique' => 'email already functional, track yur ticket below',
        ];
    }
}
