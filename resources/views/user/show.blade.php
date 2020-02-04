@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/user" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$users->name}}</h1>
<div>
    <h4>{{$users->name}}</h4>
    <h4>{{$users->email}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="{{url('/user')}}/{{$users->id}}/edit" class="btn btn-default">Edit User</a>
{!!Form::open(['action'=> ['UserController@destroy', $users->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>
@endsection