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




<h3 style="text-align: center;"><b style="font-size: 150px;">ACHTUNG</b><p>Sie sind nicht erlaubt im diesem Sektion zu sein.</p>

<a href="{{ URL::to('/admin') }}"><button type="button" class="btn btn-default" style="margin-top: 60px; padding: 30px; font-weight: bold;">
<span class="glyphicon glyphicon-chevron-left" style="margin-right: 10px;"></span>
Zurück gehen</button></a>

</h2>
</h3>







@stop
