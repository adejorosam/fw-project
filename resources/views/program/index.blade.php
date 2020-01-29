@extends('layouts.app')
@section('title')
    Available programs| Findworka
@endsection
@section('content')
<div class="container">
    <h1>Available Programs</h1>
@if(count($programs) > 0)
    @foreach($programs as $program)
        <div class="well mb-3">
            <h3><a href="/program/{{$program->id}}">{{$program->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No programs found</p>
    @endif
</div>
<div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href="program/create"> Create a program </a></p>
</div>
@endsection