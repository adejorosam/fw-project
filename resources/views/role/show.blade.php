@extends('layouts.app')
@section('title')
    Role | Findworka
@endsection
@section('content')
<div class="container">
    <h1>{{$role->name}}</h1>
    <a class="btn btn-primary mb-3" href="/role/{{$role->id}}/edit" class="btn btn-default">Edit Role</a>
{!!Form::open(['action'=> ['RoleController@destroy', $role->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}

</div>     
@endsection