<?php

namespace SWeg\Http\Requests;

use SWeg\Http\Requests\Request;

class RechCreateRequest extends Request
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
            'rech_numm' => 'required',
            'rech_leistung_anf' => 'required',
            'rech_leistung_end' => 'required|unique:users|max:40',
            'zahl_tage' => 'required',
            'zahl_preis' => 'required',
            'zhalung_typ_id' => 'required',
            'kunde_id' => 'required',
            'user_id' => 'required',
            'globalconf_id' => 'required',
            'leistungen_id' => 'required'
        ];
    }
}
