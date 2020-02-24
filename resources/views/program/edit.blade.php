@extends('layouts.admin-dashboard')
@section('title')
    Edit a program | Findworka
@endsection
@section('content')
<div class="container">
    <h1>Edit Post</h1>
        {!! Form::open(['action'=>['ProgramsController@update', $programs->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Program Name')}}
            {{Form::text('name', $programs->name, ['class' =>'form-control', 'placeholder' => "Program Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('description',  'Program Description')}}
            {{Form::textarea('description', $programs->description, ['class' =>'form-control', 'placeholder' => "Program Description"])}}
        </div>

        <div class="form-group">
            {{Form::label('duration',  'Program Duration')}}
            {{Form::text('duration', $programs->duration, ['class' =>'form-control', 'placeholder' => "Program Duration"])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection