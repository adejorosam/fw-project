@extends('layouts.admin-dashboard')

@section('content')
<div class="container">
<h1 class="mt-3">{{$admin->name}}</h1>
<div>
    <h4>{{$admin->name}}</h4>
    <h4>{{$admin->email}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="{{url('/admin')}}/{{$admin->id}}/edit" class="btn btn-default">Edit User</a>
{!!Form::open(['action'=> ['AdminController@destroy', $admin->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>
@endsection