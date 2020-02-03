@extends('layouts.app')
@section('title', 'Create role')
@section('content')
<div class="container">
    {!! Form::open(['action'=>'RoleController@store', 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
<div class="form-group">
    {{Form::label('name',  'Role Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Role Name"])}}
</div>
<div class="form-check form-check-inline">
  @foreach($permissions as $permission)
      <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}">
      <label class="form-check-label" for="inlineCheckbox1">{{$permission->name}}</label>
  @endforeach
</div><br><br>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection