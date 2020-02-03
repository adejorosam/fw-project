@extends('layouts.app')
@section('title', 'Permission | Findworka')
@section('content')
<div class="container">
    <h1>{{$permission->name}}</h1>
    <p>{{$permission->description}}</p>
    <a class="btn btn-primary mb-3" href="/permission/{{$permission->id}}/edit" class="btn btn-default">Edit Course</a>
{!!Form::open(['action'=> ['PermissionController@destroy', $permission->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}

</div>     
@endsection