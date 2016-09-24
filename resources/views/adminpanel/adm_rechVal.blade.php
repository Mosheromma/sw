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


<style>
.form-group select {
    border: 1px solid #ccc;
    border-radius: 1px;
    display: block;
    padding: 11px;
    width: 100%;
}
</style>
<h2>Rechnung validieren -  <p style="color: #A2A2A2; display: inline;">nr.{{ $rechnungval-> id }} - {{ $rechnungval->kunde->info_unternehme}}</p>

<a href="{{ URL::to('/admin_rech') }}"><button type="button" class="btn btn-default" style="float: right;">
<span class="glyphicon glyphicon-chevron-left" style="margin-right: 10px;"></span>
Zurück gehen</button></a>

</h2>


 
<ol class="breadcrumb">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li><a href="{{ URL::to('/admin_rech') }}">Rechnung Managing Center</a></li>
  <li class="active">Rechnung als bezahlt markieren</li>
</ol>

<div class="alert alert-info">
  <b>Nutzliche Info</b>: <br> 
  <ul style="margin-top: 20px; margin-bottom: 10px; list-style: none;"><li>555 -> Noch nicht bezahlt</li><br><li>666 -> Der Rechnung hat ein Unfall</li><br><li>777 -> Der Rechnung ist schon bezahlt</li></ul>
</div>


<h3><b>Validation Information </b></h3>

{!! Form::model($rechnungval, ['route' => ['admin_rechval.update',$rechnungval->id], 'method'=>'PUT','files'=> true]) !!}



 <div class="form-group" style="margin-top: 20px;">
{!! Form::label('Status:') !!}




                    <div style="margin-left: 20px;" class="radio radio-info radio-inline">
                        <input type="radio" id="stat5" value="555" name="zahl_status" >
                        <label for="inlineRadio1"> 555 - Factura pendiente de pago  </label>
                    </div>
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="stat6" value="666" name="zahl_status" >
                        <label for="inlineRadio1"> 666 - Factura con incidente </label>
                    </div>
                    <div class="radio radio-info radio-inline">
                        <input type="radio" id="stat7" value="777" name="zahl_status" checked>
                        <label for="inlineRadio1"> 777 - Factura pagada </label>
                    </div>

</div>
<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Bezahlt am:') !!}
{!! Form::text('bezahlt_am', '',['class'=>'form-control', 'id' => 'datepicker'] )!!}
</div>

<div class="form-group" style="margin-top: 20px;">
{!! Form::label('Comprobante:') !!}
{!! Form::file('path')!!}
</div>




{!! Form::submit('Rechnung validieren',['class'=>'btn btn-primary btn-lg active','style'=>'float: right; margin-top: 20px;']) !!}

{!! Form::close() !!}







@stop

