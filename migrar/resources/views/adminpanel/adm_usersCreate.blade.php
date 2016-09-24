@extends('adminpanel.admin-layout')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
    	<b>ERROR!</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h2>Configuración de un usuario nuevo</h2>


 
<ol class="breadcrumb">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li><a href="{{ URL::to('/admin_users') }}">Benutzer Managing Center</a></li>
  <li class="active">Benutzer addieren</li>
</ol>


<h3><b>Ersten Schritt </b>- Persönliches Information</h3>

{!! Form::open(['route'=>'admin_users.store', 'method'=>'post']) !!}

 <div class="form-group" style="margin-top: 20px;">
{!! Form::label('Name:') !!}
{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name des Users']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Nachname I:') !!}
{!! Form::text('nachname1',null,['class'=>'form-control','placeholder'=>'Erstes Nachnames']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Nachname II:') !!}
{!! Form::text('nachname2',null,['class'=>'form-control','placeholder'=>'Zweites Nachnames']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Geburtstag:') !!}
{!! Form::text('geburtstag',null,['class'=>'form-control','placeholder'=>'YYYY/MM/DD']) !!}
</div>


<h3><b>Zweiten Schritt </b>- Kontaktinfo</h3>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('E-Mail:') !!}
{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'E-Mail Adresse']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Telefonnummer:') !!}
{!! Form::text('telefonnummer',null,['class'=>'form-control','placeholder'=>'Telefonnummer des Benutzers']) !!}
</div>


<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Handynummer:') !!}
{!! Form::text('handynummer',null,['class'=>'form-control','placeholder'=>'Handynummer des Benutzers']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Adresse:') !!}
{!! Form::text('adresse',null,['class'=>'form-control','placeholder'=>'Adresse des Benutzers']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Postleizahl:') !!}
{!! Form::text('postleizahl',null,['class'=>'form-control','placeholder'=>'Postleizahl']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Ort:') !!}
{!! Form::text('ort',null,['class'=>'form-control','placeholder'=>'Ort']) !!}
</div>


<h3><b>Dritten Schritt </b>- Betrieblichesinfo</h3>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Passwort:') !!}
{!! Form::password('password',['class'=>'form-control','placeholder'=>'Personal passwort']) !!}
</div>

{!! Form::submit('Benuzer addieren',['class'=>'btn btn-primary btn-lg active','style'=>'float: right; margin-top: 20px;']) !!}

{!! Form::close() !!}







@stop

