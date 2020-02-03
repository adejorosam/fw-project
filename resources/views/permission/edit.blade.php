@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['PermissionController@update', $permission->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Name')}}
            {{Form::text('name', $permission->name, ['class' =>'form-control', 'placeholder' => "Permission Name"])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection