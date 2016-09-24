<?php

namespace SWeg;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class rechnungen extends Model
{
    protected $table = 'rechnungen';

    public function kunde()
    {
        return $this->belongsTo('SWeg\kunden');
    }

    public function user()
    {
        return $this->belongsTo('SWeg\User');
    }

    public function globalconf()
    {
        return $this->belongsTo('SWeg\globalconfig');
    }

    public function leistungen()
    {
        return $this->belongsTo('SWeg\leistungen');


    }


     protected $fillable = ['rech_nummer', 'rech_leistung_anf', 'rech_leistung_end', '  zahl_typ', 'kunde_id', 'user_id', 'globalconf_id', 'leistungen_id', 'arb_stunden', 'ref', 'zahl_status','bezahlt_am'];


     public function setPathAttribute($path){

        $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
        $name = Carbon::now()->second.$path->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($path));
     }
}
