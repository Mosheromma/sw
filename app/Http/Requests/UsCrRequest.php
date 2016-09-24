<?php

namespace SWeg\Http\Requests;

use SWeg\Http\Requests\Request;

class UsCrRequest extends Request
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
            'name' => 'required',
            'nachname1' => 'required',
            'email' => 'required|unique:users|max:40',
            'geburtstag' => 'required',
            'ort' => 'required',
            'adresse' => 'required',
            'postleizahl' => 'required',
            'handynummer' => 'required',
            'password' => 'required'
        ];
    }
}
