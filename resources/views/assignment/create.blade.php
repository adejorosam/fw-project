@extends('layouts.user-dashboard')
@section('title')
    Submit your assignment | Findworka
@endsection
@section('content')
<div class="container">
{!! Form::open(['action'=>'AssignmentBoardController@store', 'method' => 'POST','enctype'=>"multipart/form-data"]) !!}
    
    <div class="form-group">
        <label for="course">Course Name</label>
        <select type="number" name="course_name" class="form-control" >
            @foreach ($courses as $course)
                <option value="{{$course->name}}">{{$course->name}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        {{Form::label('name',  'Name')}}
        {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Fill in this way: example: Samson's week 1 assignment"])}}
    </div>

    
    <div class="form-group">
        <label for="task_id">Task Name</label>
        <select type="number" name="task_id" class="form-control">
            @foreach($tasks as $task)
            @foreach($recent_course as $course)
            @if($task->course_name == $course->name)
                <option value="{{$task->id}}">{{$task->title}}</option>
            @endif
            @endforeach
            @endforeach
        </select>  
    </div>
        

    <div class="form-group">
        <label for="file">Upload your assignment</label>
        <input required type="file" class="form-control" name="file">
    </div>
    
 
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection