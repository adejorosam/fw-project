@extends('layouts.tutor-dashboard')
@section('title')
    Grade Student Assignment| Findworka
@endsection

@section('content')
<div class="container">
    <h1>Edit</h1>
        {!! Form::open(['action'=>['AssignmentBoardController@update', $assignment->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('remarks',  'remarks')}}
            {{Form::text('remarks', $assignment->remarks, ['class' =>'form-control', 'placeholder' => "Remark"])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection