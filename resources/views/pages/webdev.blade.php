@extends('layouts.app')

@section('title')
    Findworka | Web Development
@endsection


@section('content')
    @foreach($programs->courses as $course)
        <h1> {{$course->courses->id}} </h1>
    @endforeach 
@endsection
