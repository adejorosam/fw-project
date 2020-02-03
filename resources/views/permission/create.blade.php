@extends('layouts.app')
@section('content')
  
    <div class="container">
      {!! Form::open(['action'=>'PermissionController@store', 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
  <div class="form-group">
      {{Form::label('name',  'Permission Name')}}
      {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Permission Name"])}}
  </div>
  
  {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
  </div>
  @endsection