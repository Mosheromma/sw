<?php

namespace SWeg\Http\Controllers;

use Illuminate\Http\Request;

use SWeg\Http\Requests;
use SWeg\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin_index()
    {
       return view('adminpanel.adm_index');
    }

    public function admin_error(){

        return view('adminpanel.adm_error');

    }




}
