@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
        {!! Form::open(['action'=>['UserController@update', $users->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Users Name')}}
            {{Form::text('name', $users->name, ['class' =>'form-control', 'placeholder' => "Users Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('Email',  'Users Email')}}
            {{Form::text('Email', $users->email, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div>
        <div class="form-group">
            <label for="privilege">Pick a privilege</label>
            <select type="number" name="privilege_id" class="form-control" >
                @foreach ($privileges as $privilege)
                    <option value="{{$privilege->id}}">{{$privilege->name}}</option>
                @endforeach
            </select>
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection