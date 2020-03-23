@extends('layouts.tutor-dashboard')
@section('title', 'Assignment | Findworka')
@section('content')
<div class="container">
    <p><b>Title</b>: {{$task->title}}</p>
    <p><b>Course</b>: {{$task->course_name}}</p>
    <p><b>Content</b>: {!!$task->content!!}</p>
    <p><b>Deadline</b>: {{\Carbon\Carbon::parse($task->deadline)->format('d/m/Y')}}</p>
   
    <a class="btn btn-primary mb-3" href="{{url('task')}}/{{$task->id}}/edit" class="btn btn-default">Edit Assignment</a>
{!!Form::open(['action'=> ['TaskController@destroy', $task->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>     
@endsection