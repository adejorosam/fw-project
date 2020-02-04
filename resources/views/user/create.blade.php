@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'UserController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'User Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "User Name"])}}
</div>
<div class="form-group">
    {{Form::label('email',  'User Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => "User email"])}}
</div>
<div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div>
<div class="form-group">
    <label for="privilege">Pick a privilege</label>
    <select type="number" name="privilege_id" class="form-control" >
        @foreach ($privileges as $privilege)
            <option value="{{$privilege->id}}">{{$privilege->name}}</option>
        @endforeach
    </select>
</div>


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection