@extends('adminpanel.admin-layout')

<?php $message=Session::get('message'); ?>



@section('content')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {!!Session::get('message')!!}
</div>

@endif

<h2>Benutzer Managing Center</h2>


 
<ol class="breadcrumb">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li class="active">Benutzer Managing Center</li>
</ol>



<ul class="nav nav-pills">
  <li class="active"><a href="#">Benutzer sehen <span class="glyphicon glyphicon-eye-open" style="margin-left:10px;"></span></a></li>
  <li><a href="{{ URL::to('/admin_users/create') }}">Neuen Benutzer addieren <span class="glyphicon glyphicon-plus" style="margin-left:10px;"></a></li>
  
</ul>



<h3 style="margin-top: 34px; margin-bottom: 34px;">Liste des Benutzers</h3>




<div class="table-responsive">
  <table class="table SWeg_ADM_ListTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Nachname I</th>
        <th>E-Mail</th>
        <th>Typ</th>
        <th style="text-align: center;">Optionen</th>
      </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
      <tr>
        <td><span class="badge">{{$user -> id}}</span></td>
        <td>{{$user -> name}}</td>
        <td>{{$user -> nachname1}}</td>
        <td>{{$user -> email}}</td>
        <td>Super Administrator</td>
        <td>


        {!!link_to_route('admin_users.show', $title = 'Info sehen', $user->id, $attributes = ['class'=>'btn btn-warning'])!!}

        {!!link_to_route('admin_users.edit', $title = 'Bearbeiten', $user->id, $attributes = ['class'=>'btn btn-info'])!!}

        {!! Form::open( ['route' => ['admin_users.destroy',$user->id], 'method'=>'DELETE', 'style'=>'display: inline-block;']) !!}

       	{!! Form::submit('Löschen',['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}

        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>













@stop

