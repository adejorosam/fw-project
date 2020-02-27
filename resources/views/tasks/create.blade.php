@extends('layouts.tutor-dashboard')
@section('title')
    Post Assignment | Findworka
@endsection

@section('content')
<div class="container">
    <h1>Edit</h1>
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
            {{Form::label('Content',  'Content')}}
            {{Form::textarea('content','', ['class' =>'form-control', 'placeholder' => "Content"])}}
        </div>

        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection