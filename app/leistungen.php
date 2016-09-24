<?php

namespace SWeg;

use Illuminate\Database\Eloquent\Model;

class leistungen extends Model
{

	protected $table = 'leistungen';

    public function rechnungen()
    {
        return $this->hasMany('SWeg\rechnungen');
    }
}
