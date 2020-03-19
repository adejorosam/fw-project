@extends('layouts.tutor-dashboard')
@section('title')
    Edit Task | Findworka
@endsection

@section('content')
<div class="container">
    <h1>Edit</h1>
        {!! Form::open(['action'=>['TaskController@update', $task->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <label for="course">Course Name</label>
            <select type="number" name="course_name" class="form-control" >
                @foreach ($courses as $course)
                    <option value="{{$course->name}}">{{$course->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {{Form::label('Title',  'Title')}}
            {{Form::text('title',$task->title, ['class' =>'form-control', 'placeholder' => "Title"])}}
        </div>
        
        <div class="form-group">
            <label> Content </label>
            <textarea style="height:250px;" name="content" class="form-control" >{{!!$task->content!!}} </textarea>
        </div>

        <div class="form-group">
            <label for="deadline"> Deadline </label>
            <input style="width:200px; border-color:black;" type="date" id="deadline" name="deadline" value="{{date('Y-m-d', strtotime($task->deadline))}}" class="form-control">
        </div>
       
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>

