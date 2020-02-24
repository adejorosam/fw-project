@extends('layouts.user-dashboard')
@section('title')
    Submit your assignment | Findworka
@endsection
@section('content')
<div class="container">
    {!! Form::open(['action'=>'AssignmentBoardController@store', 'method' => 'POST','enctype'=>"multipart/form-data"]) !!}
    {{-- @foreach($courses as $course)
    <div class="form-group">
        {{Form::label('Course Name',  'Course Name')}}
        {{Form::text('course_name',$course->name, ['class' =>'form-control', 'placeholder' => "Name"])}}
        @endforeach  
    </div> --}}
    <div class="form-group">
        <label for="privilege">Course Name</label>
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
        <label for="file">Upload your assignment</label>
        <input required type="file" class="form-control" name="file">
    </div>
    
    {{-- <div class="form-group">
        @foreach($courses as $course)
        {{Form::label('name',  'Name')}}
        {{Form::text('name',, ['class' =>'form-control', 'placeholder' => "Name"])}}
    </div>
    @endforeach
    --}}
    
                    
                


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection