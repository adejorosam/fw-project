@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of all available Courses</h1>
    @foreach ($courses as $course)
    <h1>{{$course->id}}:<a href="/admin/{{$course->id}}"> {{$course->name}} </a></h1>
    @endforeach
    </div> 
    <div class="container">
        <p ><a class="btn btn-primary mb-3" style="color:white;" href="admin/create"> Create a course </a></p>
    </div>   
@endsection