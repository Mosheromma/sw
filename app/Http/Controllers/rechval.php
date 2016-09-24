<?php

namespace SWeg\Http\Controllers;



use Illuminate\Http\Request;

use SWeg\Http\Requests;
use SWeg\Http\Requests\RechValRequest;
use SWeg\rechnungen;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Redirect; 
use SWeg\Http\Controllers\Controller;


class rechval extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                $rech = rechnungen::find($id);
           return view('adminpanel/adm_usersEdit',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $rechnungval = rechnungen::find($id);
        return view('adminpanel/adm_rechVal',['rechnungval'=>$rechnungval]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RechValRequest $request, $id)
    {
        $rechnungval = rechnungen::find($id);
        $rechnungval->fill($request->all());
        $rechnungval->save();

        Session::flash('message','Die Rechnung war efolgreich validiert');
        return Redirect::to('/admin_rech');
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
