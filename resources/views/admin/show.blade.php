@extends('layouts.app')
@section('title')
    Course | Findworka
@endsection
@section('content')
<div class="container">
    <h1>{{$courses->name}}</h1>
    <p>{{$courses->description}}</p>
    <p>{{$courses->price}}</p>
    {!!Form::open(['action'=> ['AdminController@destroy', $courses->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection