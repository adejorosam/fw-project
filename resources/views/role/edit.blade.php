@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit</h1>
    {!! Form::open(['action'=>['RoleController@update', $role->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Name')}}
            {{Form::text('name', $role->name, ['class' =>'form-control', 'placeholder' => "Name"])}}
        </div>
        @foreach($permissions as $permission)
    <div class="form-check form-check-inline">
        @if($role->permissions->where('id', $permission->id)->count() > 0)
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $permission->id }}" name="permissions[]" checked="checked">
        @else
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $permission->id }}" name="permissions[]">
        @endif
          <label class="form-check-label" for="inlineCheckbox1">{{ $permission->name }}</label>
        </div>
    @endforeach
        
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection