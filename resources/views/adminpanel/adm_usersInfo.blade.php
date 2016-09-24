@extends('adminpanel.admin-layout')

@section('content')

<h2> {{$user -> name}} {{$user -> nachname1}} {{$user -> nachname2}}

<a href="{{ URL::to('/admin_users') }}"><button type="button" class="btn btn-default" style="float: right;">
<span class="glyphicon glyphicon-chevron-left" style="margin-right: 10px;"></span>
Zurück gehen</button></a>

</h2>


 
<ol class="breadcrumb" style="margin-bottom: 40px;">
  <li><a href="{{ URL::to('/admin') }}">Haupttaffel</a></li>
  <li><a href="{{ URL::to('/admin_users') }}">Benutzer Managing Center</a></li>
  <li class="active">{{$user -> name}} {{$user -> nachname1}} {{$user -> nachname2}}</li>
</ol>


   




	

<div class="list-group">
  <div  class="list-group-item actUsertyp">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Name und Nachname</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> name}} {{$user -> nachname1}} {{$user -> nachname2}}</p>
  </div>
  <div  class="list-group-item active">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">User Typ</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> user_typ}}</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Geburtstage</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> geburtstag}}</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">E-mail</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> email}}</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Passwort</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">***********************</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Ganze adresse</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> adresse}}, {{$user -> postleizahl}},{{$user -> ort}}</p>
  </div>
   <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Telefonnummer</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> telefonnummer}}</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Handynummer</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> handynummer}}</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Gemach am</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> created_at}}</p>
  </div>
  <div  class="list-group-item">
    <h4 class="list-group-item-heading SWeg_ADM_infoBIG">Läzte Bearbeitung</h4>
    <p class="list-group-item-text SWeg_ADM_infoSMALL">{{$user -> updated_at}}</p>
  </div>
</div>






@stop

