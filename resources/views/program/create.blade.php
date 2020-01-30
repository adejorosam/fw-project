@extends('layouts.app')
@section('title')
    Create a program | Findworka
@endsection
@section('content')
<div class="container">
    {!! Form::open(['action'=>'ProgramsController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Program Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Program Name"])}}
</div>
<div class="form-group">
    {{Form::label('description',  'Program Description')}}
    {{Form::textarea('description','', ['class' =>'form-control', 'placeholder' => "Program Description"])}}
</div>

<div class="form-group">
    {{Form::label('duration',  'Program Duration')}}
    {{Form::text('duration','', ['class' =>'form-control', 'placeholder' => "Program Duration"])}}
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection