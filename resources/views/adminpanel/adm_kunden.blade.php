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

<h2>Kunden Area</h2>


 
<ol class="breadcrumb">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li class="active">Kunden Area</li>
</ol>

<div class="table-responsive">
  <table class="table SWeg_ADM_ListKund">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name des Unternehmens</th>
        <th>Kontakt Persone</th>
        <th>E-Mail</th>
        <th>Telefonnummer</th>
        <th>Website</th>
        <th>Status</th>
        <th style="text-align: center;">Optionen</th>
      </tr>
    </thead>
    @foreach($kunden as $kunde)
    <tbody>
      <tr>
        <td><span class="badge">{{$kunde -> id}}</span></td>
        <td>{{$kunde -> info_unternehme}}</td>
        <td>{{$kunde -> kont_name}} {{$kunde -> kont_nachname1}} {{$kunde -> kont_nachname2}}</td>
        <td>{{$kunde ->   kont_email}}</td>
        <td>{{$kunde ->   kont_telf}}</td>
        <td>{{$kunde ->   info_website}}</td>
        <td>Active</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>








@stop

