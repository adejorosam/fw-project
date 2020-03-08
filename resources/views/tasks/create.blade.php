@extends('layouts.tutor-dashboard')
@section('title')
    Post Assignment | Findworka
@endsection
@section('content')
<div class="container">
    <h1>Create Assignment</h1>
    {!! Form::open(['action'=>'TaskController@store', 'method' => 'POST','enctype'=>"multipart/form-data"]) !!}
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
            {{Form::text('title','', ['class' =>'form-control', 'placeholder' => "Title"])}}
        </div>

        
        <div class="form-group">
            <label> Content </label>
            <textarea style="height:250px;" class="form-control" id="article-ckeditor" name="content"></textarea>
        </div>

        {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
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


