<?php

namespace SWeg\Http\Controllers;

use Illuminate\Http\Request;

use SWeg\Http\Requests;
use SWeg\Http\Controllers\Controller;

use SWeg\rechnungen;
use SWeg\kunden;
use SWeg\globalconfig;
use Auth;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Redirect; 
use PDF;

class RechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rechn = rechnungen::All(); 



      $no_bezahlt = \DB::select("
           SELECT sw_rechnungen.rech_nummer, sw_rechnungen.id, sw_kunden.info_unternehme, sw_rechnungen.created_at
           FROM sw_rechnungen
           LEFT JOIN sw_kunden
           ON sw_kunden.id = sw_rechnungen.kunde_id
           WHERE sw_rechnungen.zahl_status = 555
         
           ");

      $bezahlt = \DB::select("
           SELECT sw_rechnungen.rech_nummer, sw_rechnungen.bezahlt_am, sw_rechnungen.id, sw_kunden.info_unternehme, sw_rechnungen.created_at
           FROM sw_rechnungen
           LEFT JOIN sw_kunden
           ON sw_kunden.id = sw_rechnungen.kunde_id
           WHERE sw_rechnungen.zahl_status = 777
           ");


      $error = \DB::select("
           SELECT sw_rechnungen.rech_nummer, sw_rechnungen.id, sw_kunden.info_unternehme, sw_rechnungen.created_at
           FROM sw_rechnungen
           LEFT JOIN sw_kunden
           ON sw_kunden.id = sw_rechnungen.kunde_id
           WHERE sw_rechnungen.zahl_status = 666
           ");

        return view('adminpanel/adm_rechnungen', compact('rechn','no_bezahlt','bezahlt','error'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $kunden = kunden::lists('info_unternehme', 'id');
        $gconf = globalconfig::lists('conf_name', 'id');

        $user = Auth::user()->name;
        $usern1 = Auth::user()->nachname1;
        $usern2 = Auth::user()->nachname2;
        $userid = Auth::user()->id;

       

        return view('adminpanel/adm_rechnungenCreate', compact('kunden','user','userid','usern1','usern2','gconf'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $rechinfo = rechnungen::find($id); 

        $preis_ohne = $rechinfo->arb_stunden * $rechinfo->leistungen->lei_preis;

        $zahl_status = $rechinfo->zahl_status;

        $panf = date('d-m-Y', strtotime($rechinfo['rech_leistung_anf']));
        $pend = date('d-m-Y', strtotime($rechinfo['rech_leistung_end']));
        $xxh5 = date('m-d-H-i-s', strtotime($rechinfo['created_at']));

        $pdf=PDF::loadView('adminpanel/adm_rechnungInfo',['rechinfo'=>$rechinfo, 'panf'=>$panf, 'pend'=>$pend, 'xxh5'=>$xxh5, 'zahl_status'=>$zahl_status], ['preis_ohne'=>$preis_ohne]);
        return $pdf->stream('rechnung.pdf');



              
        return $rechinfo->globalconf->unt_name;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


