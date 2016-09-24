<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>rechinfo</title>
    <style>

    body{ font-family: Calibri, sans-serif;  }

    #SW-RECH-Header{
    width: 100%;
    min-height: 200px;
    border-bottom: 2px solid #fff;

  }

  .SW-RECH-logo{
    float: left;
    clear: left;
    width: 508px;
    display: inline-block;
    margin-top: -10px;
    
  }

  .SW-RECH-slog{
    float: right;
    width: 140px;
    display: inline-block;

  }

    .SW-RECH-Body{
    width: 100%;
  }

    .SW-RECH-Footer{
    width: 100%;
    position: absolute;
    bottom: 0;
    border-top: 1px solid #908D8D;
    font-size: 10px;
    padding-top: 10px;
    text-align: center;
    font-family: Calibri, sans-serif;
  }

  .SW-RECH-AdresseUns, .SW-RECH-AdresseSie{
    width: 100%;
    float: right;
    text-align: right;
    margin-top: 40px;
    font-family: Calibri, sans-serif;
    font-size: 12px;
    font-weight: 100;
  }

  .SW-RECH-AdresseUns b, .SW-RECH-AdresseSie b{
    font-weight: bold;
  }

  .SW-RECH-AdresseSie{
    text-align: left!important;
    margin-top: 0px!important;
  }

  .SW-RECH-Body{
    text-align: center;
    margin-top: 20px;
  
  }

  .SW-RECH-Body h3{
    font-size: 23px;

  }

  .SW-RECH-numm{
    position: absolute;
    top: 87px;
    background: #08483B;
    padding: 7px;
    font-size: 25px;
    text-align: center;
    color: #fff;
    border-radius: 3px;

  }

  .SW-RECH-numm span{
    
    font-size: 11px;
  }

    /*
  Pretty Table Styling
  CSS Tricks also has a nice writeup: http://css-tricks.com/feature-table-design/
  */
  
  table{

  }

  th{
    background: #CFD6D5;
    border: 1px solid #B7B9B8;
    padding: 5px;
    font-size: 10px;
    font-weight: lighter;
  }

  th.down{
    background: #DFE2E2;
    font-weight: bold!important;
  }

  th.downHash{
    background: #B5B5B5;
    font-weight: bold!important;
    text-align: left;
    font-size: 8px;
  }

  td{
    border: 1px solid #B7B9B8;
    background: #F2F2F2;
        padding: 10px;
    font-size: 10px;
    text-align: center;
  }

  .SW-end{

    margin-top: 30px;
    font-weight: lighter;
    font-size: 14px;
  }

    div.zahl
  {
    width: 250px;
    height: 200px;
    top: 45%;
    right: 10%;
    position: absolute;
  }

  div.zahl.erfolg:after, div.zahl.error:after
  {
      content:"BEZAHLT   {{ date('d-m-Y', strtotime($rechinfo -> bezahlt_am)) }}";
      position:absolute;
      top:270px;
      right:10px;
      z-index:1;
      font-family:Arial,sans-serif;
      -webkit-transform: rotate(-45deg); /* Safari */
      -moz-transform: rotate(-45deg); /* Firefox */
      -ms-transform: rotate(-45deg); /* IE */
      -o-transform: rotate(-45deg); /* Opera */
      transform: rotate(-45deg);
      font-size:40px;
      color:#c00;
      background:#fff;
      border:solid 4px #c00;
      padding:5px;
      border-radius:5px;
      zoom:1;
      filter:alpha(opacity=20);
      opacity:0.2;
      -webkit-text-shadow: 0 0 2px #c00;
      text-shadow: 0 0 2px #c00;
      box-shadow: 0 0 2px #c00;
  }

  div.zahl.error:after{
     content:"MUSS BEZAHLEN";
  }

  </style>



  </head>
  <body>

  <div id="SW-RECH-Header">

      <div class="SW-RECH-logo">
     <img alt="Staub Weg" style="width: 140px;" src="http://localhost/public/assets/css/images/sw-logo.png">
    </div>

    <div class="SW-RECH-slog">
     <img alt="Staub Weg" style="width: 190px; height: 30px;" src="http://localhost/public/assets/css/images/sw-rech-slog.png">
    </div>

  </div>

  <div class="SW-RECH-numm">
    <span>Rechnung nr.</span><br>
    {{$rechinfo -> rech_nummer}} 
  </div>
  <div class="SW-RECH-AdresseUns">
      
    <b>{{$rechinfo ->globalconf->unt_name}} </b><br>
    {{$rechinfo ->globalconf->unt_adresse}} <br>
    {{$rechinfo ->globalconf->unt_postleizahl}} , {{$rechinfo ->globalconf->unt_ort}} <br>
    Tel. {{$rechinfo ->globalconf->unt_konttelf}} <br>
    Email: {{$rechinfo ->globalconf->unt_kontemail}} <br>
    {{$rechinfo ->globalconf->unt_website}} <br>

  </div>

  <div class="SW-RECH-AdresseSie">
      
    <b>{{$rechinfo ->kunde->info_unternehme}} </b><br>
    <i>{{$rechinfo ->kunde->kont_name}} {{$rechinfo ->kunde->kont_nachname1}}  {{$rechinfo ->kunde->kont_nachname2}} </i><br>
    {{$rechinfo ->kunde->info_adresse}} <br>
    {{$rechinfo ->kunde->info_postleizahl}} , {{$rechinfo ->kunde->info_ort}} <br>
   

  </div>

  <div class="SW-RECH-Body">
    <h3>Rechnung</h3>

    <table style="width: 100%;" cellspacing="0">
    <tr><th style="padding: 10px;"><b>Kunde:</b> {{$rechinfo ->kunde->info_unternehme}} - 
    <i>{{$rechinfo ->kunde->kont_name}} {{$rechinfo ->kunde->kont_nachname1}}  {{$rechinfo ->kunde->kont_nachname2}}</i>
    </th>
    <th style="padding: 10px;"><b>Kundenummer:</b> {{$rechinfo ->kunde->id}}</th>
    <th style="padding: 10px;"><b style="margin-right: 10px;">Datum der Rechnung:</b>{{$rechinfo -> created_at}}</th>
    </tr></table>

    <table style="width: 100%;" cellspacing="0">
    <tr>
    <th class="down">Code</th>
    <th class="down">Name des Leistungs</th>
    <th class="down">Type</th>
    <th class="down">Zahlung Mittel</th>
    <th class="down">Neto St Preis</p></th>
    <th class="down">Stunten</th>
    <th class="down">Rabatt</th>
    <th class="down">Leistung Period</th>
    <th class="down">Ref#</th>

    </tr>


  

    <tr><td>{{$rechinfo ->leistungen->lei_code}} </td>
    <td>{{$rechinfo ->leistungen->lei_name}}</td>
    <td>{{$rechinfo ->leistungen->typ}}</td>
    <td>{{$rechinfo -> zahl_typ}}</td>
    <td>{{$rechinfo ->leistungen->lei_preis}}</td>
    <td>{{$rechinfo -> arb_stunden}}</td>
    <td>0% - keine</td>
    <td>{{ $panf }} <i> bis</i> <br>{{ $pend }}</td>
    <td>{{$rechinfo -> ref}}</td>
    </tr>




    </table>

    <table style="width: 100%;" cellspacing="0">
    <tr>
    <th class="downHash" style="padding: 3px;"><b>SW-H5:</b> xxh5-{{$rechinfo ->user->id}}-{{$rechinfo->kunde->id}}-{{$rechinfo-> rechnummer}}{{ $xxh5 }}
    </th>
    </tr></table>

    <table style="width: 100%;" cellspacing="0">
    <tr><th style="padding: 10px;"><b>Steuer:</b> {{$rechinfo ->globalconf->conf_umsatzteuer}} % - 
    </th>
    <th style="padding: 10px;"><b>Preis ohne Steuer:</b> {{ $preis_ohne  }}€</th>
    <th style="padding: 10px;"><b>Steuer:</b> {{ ($preis_ohne * $rechinfo ->globalconf->conf_umsatzteuer)/100  }}€</th>
    <th style="padding: 10px;"><b style="margin-right: 10px;">Endpreis:</b>
    {{ $preis_ohne + ($preis_ohne * $rechinfo ->globalconf->conf_umsatzteuer)/100   }} €</th>
    </tr></table>

  </div>
  <bR>
    <div class="SW-end">Wir danken Ihnen für Ihr Vertrauen.
    <br><br>Ihr Reinigungmeister <i>Staub-Weg</i></div>

    @if($zahl_status == 777)
      <div class="zahl erfolg"></div>
    @elseif ($zahl_status == 666)
      <div class="zahl error"></div>
    @else

    @endif

  <div class="SW-RECH-Footer">
    

  {{$rechinfo ->globalconf->unt_name}} <br>
  {{$rechinfo ->globalconf->unt_adresse}} , {{$rechinfo ->globalconf->unt_ort}}, {{$rechinfo ->globalconf->unt_postleizahl}}<br>
  St.-Nr: {{$rechinfo ->globalconf->unt_steuernummer}} --  Finantzamt Bodenseekreis<br>
  {{$rechinfo ->globalconf->unt_website}} – Tel. {{$rechinfo ->globalconf->unt_konttelf}}

  </div>


  </body>
</html>