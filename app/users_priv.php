<?php

namespace SWeg;

use Illuminate\Database\Eloquent\Model;

class users_priv extends Model
{

	protected $table = 'user_priv';

    public function rechnungen()
    {
        return $this->hasMany('SWeg\rechnungen');
    }
}
