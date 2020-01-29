@extends('layouts.app')
@section('title')
    Edit a privilege | Findworka
@endsection
@section('content')
<div class="container">
    <h1>Edit</h1>
        {!! Form::open(['action'=>['PrivilegesController@update', $privileges->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Name')}}
            {{Form::text('name', $privileges->name, ['class' =>'form-control', 'placeholder' => "Name"])}}
        </div>
        
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection