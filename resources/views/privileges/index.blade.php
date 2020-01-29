@extends('layouts.app')
@section('title')
    Available privileges | Findworka
@endsection
@section('content')
<div class="container">
    <h1>Available Privilege(s)</h1>
@if(count($privileges) > 0)
    @foreach($privileges as $privilege)
        <div class="well mb-3">
            <h3><a href="/privilege/{{$privilege->id}}">{{$privilege->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No privileges found</p>
    @endif
</div>
<div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href="privilege/create"> Create a privilege </a></p>
</div>
@endsection
