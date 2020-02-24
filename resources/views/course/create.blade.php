@extends('layouts.admin-dashboard')
@section('title','Create program | Findworka')
@section('content')
<div class="container">
    {!! Form::open(['action'=>'CourseController@store', 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
<div class="form-group">
    {{Form::label('name',  'Course Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Course Name"])}}
</div>
<div class="form-group">
    <label for="">File Select</label>
    <input required type="file" class="form-control" name="image">
</div>
<div class="form-group">
    {{Form::label('description',  'Course Description')}}
    {{Form::textarea('description','', ['class' =>'form-control', 'placeholder' => "Course Description"])}}
</div>
<div class="form-group">
    {{Form::label('price',  'Course Price')}}
    {{Form::text('price','', ['class' =>'form-control', 'placeholder' => "Course Price"])}}
</div>
<div class="form-group">
    {{Form::label('content',  'Course Content')}}
    {{Form::textarea('content','', ['class' =>'form-control', 'placeholder' => "Course Content"])}}
</div>
<div class="form-group">
    <label for="program">Pick a Program</label>
    <select type="number" name="program_id" class="form-control" >
        @foreach ($programs as $program)
            <option value="{{$program->id}}">{{$program->name}}</option>
        @endforeach
    </select>
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection