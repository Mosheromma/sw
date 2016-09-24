<?php

namespace KDScript\Http\Controllers;

use Illuminate\Http\Request;

use KDScript\Http\Requests;
use KDScript\Http\Requests\UsCrRequest;
use KDScript\Http\Requests\UsEditRequest;
use KDScript\User;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\Redirect; 
use KDScript\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users = User::All();

            return view('adminpanel/adm_usersIndex',compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpanel/adm_usersCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsCrRequest $request)
    {
        User::create([

            'name' => $request['name'],
            'nachname1' => $request['nachname1'],
            'nachname2' => $request['nachname2'],
            'email' => $request['email'],
            'geburtstag' => $request['geburtstag'],
            'telefonnummer' => $request['telefonnummer'],
            'handynummer' => $request['handynummer'],
            'adresse' => $request['adresse'],
            'postleizahl' => $request['postleizahl'],
            'ort' => $request['ort'],
            'password' => bcrypt($request['password']),


            ]);

        Session::flash('message','Den neuen Benutzer war erflogreich addiert');
        return Redirect::to('/admin_users');

    }


    public function show($id)
    {
            
        $user = User::find($id);
        return view('adminpanel/adm_usersInfo',['user'=>$user]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('adminpanel/adm_usersEdit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsEditRequest $request, $id)
    {
        
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message','Den Benutzer war erflogreich bearbeitet');
        return Redirect::to('/admin_users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('message','Den Benutzer war erflogreich gelöscht');
        return Redirect::to('/admin_users');
    }
}
