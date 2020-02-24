@extends('layouts.admin-dashboard')
@section('title', 'Course | Findworka')
@section('content')
<div class="container">
    <h1>Course Name:{{$courses->name}}</h1>
    <p><b>Course Description</b>:{{$courses->description}}</p>
    <p><b>Course Content</b>:{{$courses->content}}</p>
    <p><b>Price</b>:{{$courses->price}}</p>
    <p><b>Duration</b>:3 months </p>
    <a class="btn btn-primary mb-3" href="{{url('/course')}}/{{$courses->id}}/edit" class="btn btn-default">Edit Course</a>
{!!Form::open(['action'=> ['CourseController@destroy', $courses->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection