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

<h2>Neuer Rechnung addieren</h2>


 
<ol class="breadcrumb">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li><a href="{{ URL::to('/admin_users') }}">Rechngungen Managing Center</a></li>
  <li class="active">Rechnung addieren</li>
</ol>


<h3><b>Ersten Schritt </b>- Persönliches Information</h3>



<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Rechnung Nummer:') !!}
{!! Form::text('nachname1',null,['class'=>'form-control','placeholder'=>'Erstes Nachnames']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Anfangdatum des Leistungs:') !!}
{!! Form::text('bezahlt_am', '',['class'=>'form-control', 'id' => 'datepicker'] )!!} 
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Enddatum des Leistungs:') !!}
{!! Form::text('bezahlt_aWm', '',['class'=>'form-control', 'id' => 'datepicker2'] )!!} 
</div>


<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Zahltage:') !!}
{!! Form::text('nachname1',null,['class'=>'form-control','placeholder'=>'Erstes Nachnames']) !!}
</div>





     <div class="form-group" style="margin-top: 20px;">
{!! Form::label('Kunde:') !!}
{!! Form::select('kunde_id', $kunden)!!}
</div>






 <div class="form-group" style="margin-top: 20px;">
{!! Form::label('Zahlung Typ:') !!}
{!! Form::select('kunde_id', [0, 1, 2], 2) !!}
</div>

 <div class="form-group" style="margin-top: 20px;">
{!! Form::label('User:') !!}
{!! Form::select('user_id', [$userid => $user." ".$usern1." ".$usern2 ], $userid) !!}
</div>

 <div class="form-group" style="margin-top: 20px;">
{!! Form::label('Config:') !!}
{!! Form::select('globalconf_id', $gconf) !!}
</div>

 <div class="form-group" style="margin-top: 20px;">
{!! Form::label('Leistungen:') !!}
{!! Form::select('kunde_id', [0, 1, 2], 2) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Endpreis:') !!}
{!! Form::text('nachname1',null,['class'=>'form-control','placeholder'=>'Erstes Nachnames']) !!}
</div>



{!! Form::submit('Rechnung addieren',['class'=>'btn btn-primary btn-lg active','style'=>'float: right; margin-top: 20px;']) !!}

{!! Form::close() !!}







@stop

