<?php

namespace SWeg;

use Illuminate\Database\Eloquent\Model;

class globalconfig extends Model
{

	protected $table = 'globalconf';

    public function rechnungen()
    {
        return $this->hasMany('SWeg\rechnungen');
    }
}
