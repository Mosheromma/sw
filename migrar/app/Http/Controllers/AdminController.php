<?php

namespace KDScript\Http\Controllers;

use Illuminate\Http\Request;

use KDScript\Http\Requests;
use KDScript\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
       return view('adminpanel.adm_index');
    }




}
