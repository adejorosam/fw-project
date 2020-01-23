@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Programs</h1>
@if(count($programs) > 0)
    @foreach($programs as $program)
        <div class="well mb-3">
            <h3><a href="/program/{{$program->id}}">{{$program->name}}</a></h3>
            <p>{{$program->body}}</p>
        </div>
    @endforeach
@else
    <p>No programs found</p>
    @endif
</div>
@endsection