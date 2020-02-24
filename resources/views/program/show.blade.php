@extends('layouts.admin-dashboard')
@section('title')
    Program | Findworka
@endsection
@section('content')
<div class="container">
<h1 class="mt-3">{{$programs->name}}</h1>
<div>
    <h3>Description : {{$programs->description}}</h3>
    <h5>Duration : {{$programs->duration}}</h5>
</div>
<hr>
<a class="btn btn-primary mb-3" href="{{url('/program')}}/{{$programs->id}}/edit" class="btn btn-default">Edit Program</a>
{!!Form::open(['action'=> ['ProgramsController@destroy', $programs->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>
@endsection