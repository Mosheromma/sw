@extends('adminpanel.admin-layout')

@section('content')

<style>
.alert-success {
    margin-bottom: -10px !important;
    margin-top: 25px;
}

.noExs{
  border-radius: 0!important;
  margin-top: 20px;
}
</style>

<h2>Rechnung Manager</h2>


 
<ol class="breadcrumb">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li class="active">Rechnung Manager</li>
</ol>

<ul class="nav nav-pills">
  <li class="active"><a href="#">Benutzer sehen <span class="glyphicon glyphicon-eye-open" style="margin-left:10px;"></span></a></li>
  <li><a href="{{ URL::to('/admin_rechnungen/create') }}">Neue Rechnung addieren <span class="glyphicon glyphicon-plus" style="margin-left:10px;"></a></li>
  
</ul>

@if(Session::has('message'))

<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  {!!Session::get('message')!!}
</div>

@endif

<div class="row">

  <div class="col-xs-6" >


    <div class="panel panel-default" style="margin-top: 40px;">
      <div class="panel-heading">Facturas pendientes de pago</div>
     
      <table class="table">
        <thead>
      <tr>
        <th>Num.</th>
        <th>Kunde</th>
        <th>Datum</th>
      </tr>
    </thead>
  
    @foreach($no_bezahlt as $no_b)
    <tbody>
      <tr>
        <td>{{$no_b -> rech_nummer}}</td>   
        <td>{{$no_b ->  info_unternehme}}</td>
        <td>{{ date('d-m-Y', strtotime($no_b -> created_at)) }}</td>
        <td>       {!!link_to_route('admin_rech.show', $title = 'Info sehen', $no_b->id, $attributes = ['class'=>'btn btn-warning'])!!}</td>
      </tr>
    </tbody>
    @endforeach

      </table>
    </div>

  </div>

  <div class="col-xs-6">
    <div class="panel panel-info" style="margin-top: 40px;">
      <div class="panel-heading">Facturas pendiente de pago</div>
     
      <table class="table">
        <thead>
      <tr>
        <th>Num.</th>
        <th>Kunde</th>
        <th>Datum</th>
        <th>Mehr</th>
      </tr>
    </thead>

    @if($no_bezahlt == null)
    </table>
    <tbody>
    <div class="alert alert-warning noExs">
      Actualmente no existen facturas pendientes de pago
    </div>
    </tbody>
    @else
    @foreach($no_bezahlt as $no_b)
    <tbody>
      <tr>
        <td>{{$no_b -> rech_nummer}}</td>   
        <td>{{$no_b ->  info_unternehme}}</td>
        <td>{{ date('d-m-Y', strtotime($no_b -> created_at)) }}</td>
        <td>       {!!link_to_route('admin_rechval.edit', $title = '', $no_b->id, $attributes = ['class'=>'btn btn-warning glyphicon glyphicon-ok'])!!}
         {!!link_to_route('admin_rech.show', $title = '', $no_b->id, $attributes = ['class'=>'btn btn-primary glyphicon glyphicon-eye-open'])!!}</td>
      </tr>
    </tbody>
    @endforeach

    @endif



      </table>
    </div>

  </div> 

    </div> <div class="row">
  <div class="col-xs-6">
    <div class="panel panel-success" style="margin-top: 40px;">
      <div class="panel-heading">Facturas pagadas</div>
     
      <table class="table">
        <thead>
      <tr>
        <th>Num.</th>
        <th>Kunde</th>
        <th>Bezahlt am</th>
        <th>Mehr</th>
      </tr>
    </thead>

    @if($bezahlt == null)
    </table>
    <tbody>
    <div class="alert alert-warning noExs">
      Actualmente no existen pagadas.
    </div>
    </tbody>
    @else
    @foreach($bezahlt as $be)
    <tbody>
      <tr>
        <td>{{$be -> rech_nummer}}</td>   
        <td>{{$be ->  info_unternehme}}</td>
        <td>{{ date('d-m-Y', strtotime($be -> bezahlt_am)) }}</td>
        <td>       {!!link_to_route('admin_rech.show', $title = '', $be->id, $attributes = ['class'=>'btn btn-primary glyphicon glyphicon-eye-open'])!!}</td>
      </tr>
    </tbody>
    @endforeach
    @endif

      </table>
    </div>

</div>
 <div class="col-xs-6">
    <div class="panel panel-danger" style="margin-top: 40px;">
      <div class="panel-heading">Facturas con incidencias</div>
     
      <table class="table">
        <thead>
      <tr>
        <th>Num.</th>
        <th>Kunde</th>
        <th>Bezahlt am</th>
        <th>Mehr</th>
      </tr>
    </thead>

    @if($error == null)
    </table>
    <tbody>
    <div class="alert alert-warning noExs">
      Actualmente no facturas con incidencias.
    </div>
    </tbody>
    @else  
    @foreach($error as $err)
    <tbody>
      <tr>
        <td>{{$err -> rech_nummer}}</td>   
        <td>{{$err ->  info_unternehme}}</td>
        <td>{{ date('d-m-Y', strtotime($err -> created_at)) }}</td>
        <td>       {!!link_to_route('admin_rech.show', $title = '', $err->id, $attributes = ['class'=>'btn btn-danger glyphicon glyphicon-cog'])!!}</td>
      </tr>
    </tbody>
    @endforeach
    @endif

      </table>
    </div>

  </div></div>
</div>









@stop

