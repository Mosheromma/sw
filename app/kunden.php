<?php

namespace SWeg;

use Illuminate\Database\Eloquent\Model;

class kunden extends Model
{
    protected $table = 'kunden';

    public function rechnungen()
    {
        return $this->hasMany('SWeg\rechnungen');
    }

    protected $fillable = ['kont_name', 'kont_nachname1', 'kont_nachname2', 'kont_email', 'kont_telf', 'info_unternehme', 'info_adresse', 'info_ort', 'info_postleizahl', 'info_website', 'zahl_typ', 'zahl_konto', 'zahl_status'];
}
