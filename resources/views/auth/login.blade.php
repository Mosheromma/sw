@extends('auth.auth-loglayout')

@section('content')


   <img src="http://localhost/public/assets/css/images/admlog.png" style="margin-top: 30px; width: 230px;" alt="Staub Weg">

<div class="panel panel-default">
  <div class="panel-body">
    


<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Achtung!</strong> Sie durfen nur durch eine sichere Netzverbindung im Konto einloggen.
</div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <b>Error!</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group" style="margin-top: 20px;">
        <label for="email">Email</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="email" style="min-height:50px;" class="form-control" name="email" value="{{ old('email') }}">
            </div>
    </div>



    <div class="form-group" style="margin-top: 20px;">
        <label for="password">Password</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-qrcode"></span></span>
              <input type="password" style="min-height:50px;" class="form-control" name="password" id="password">
            </div>
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>
    </div>
     <div class="panel-footer">
        <button type="submit" class="btn btn-info" style="width: 100%; padding: 20px; text-transform: uppercase; font-weight: bold;">In den Konto loggen</button>
    </div>
</form>

</div>
<p class="KD_CopyLogin">Staub Web - Admin Center v1.0.0</p>
</div>

@stop
