@extends('layouts.app')
@section('title', 'Edit Course | Findworka')
@section('content')
<div class="container">
{!! Form::open(['action'=>['AdminController@update', $courses->id], 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Name')}}
    {{Form::text('name',$courses->name, ['class' =>'form-control', 'placeholder' => "Course Name"])}}
</div>
<div class="form-group">
    {{Form::label('description',  'Course Description')}}
    {{Form::textarea('description', $courses->description, ['class' =>'form-control', 'placeholder' => "Course Description"])}}
</div>
<div class="form-group">
    {{Form::label('price',  'Course Price')}}
    {{Form::text('price',$courses->price, ['class' =>'form-control', 'placeholder' => "Course Price"])}}
</div>
<div class="form-group">
    {{Form::label('content',  'Course Content')}}
    {{Form::textarea('content', $courses->content, ['class' =>'form-control', 'placeholder' => "Course Content"])}}
</div>
<div class="form-group">
<label for="program_id">Pick a Program</label>
<select name="program_id" class="form-control">
    @foreach($programs as $program)
        <option value="{{$program->id}}">{{$program->name}}</option>
    @endforeach
</select>
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Update', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
    </div>
@endsection