<?php

namespace SWeg\Http\Requests;

use SWeg\Http\Requests\Request;

class RechValRequest extends Request
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
            'zahl_status' => 'required',
            'bezahlt_am' => ' required_if:zahl_status,777',
        ];
    }
}
