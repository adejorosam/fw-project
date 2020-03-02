@extends('layouts.user-dashboard')
@section('title', 'Assignment | Findworka')
@section('content')
<div class="container">

    <p><b>Title</b>:{{$task->title}}</p>
    <p><b>Course</b>:{{$task->course_name}}</p>
    <p><b>Content</b>:{{$task->content}}</p>
    
    <a class="btn btn-primary mb-3" href="{{url('assignment/create')}}" class="btn btn-default">Submit Assignment</a>
{!!Form::close()!!}
</div>     
@endsection