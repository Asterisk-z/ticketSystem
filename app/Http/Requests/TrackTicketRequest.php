<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrackTicketRequest extends FormRequest
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
            'ticket_id' => 'required',
            'track_email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'track_email.required' => 'An email is required',
            'ticket_id.required' => 'Ticket ID is required',
            'track_email.email' => 'Email is not Recognized as email',
        ];
    }
}
