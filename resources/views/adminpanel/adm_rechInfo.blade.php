@extends('adminpanel.admin-layout')

@section('content')

<h2> {{!! $user-> id!!} 

<a href="{{ URL::to('/admin_users') }}"><button type="button" class="btn btn-default" style="float: right;">
<span class="glyphicon glyphicon-chevron-left" style="margin-right: 10px;"></span>
Zurück gehen</button></a>

</h2>



   










@stop

