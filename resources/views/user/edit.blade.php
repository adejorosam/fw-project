@extends('layouts.admin-dashboard')

@section('content')
<div class="container">
    <h1>Edit User</h1>
        {!! Form::open(['action'=>['UserController@update', $users->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Users Name')}}
            {{Form::text('name', $users->name, ['class' =>'form-control', 'placeholder' => "Users Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'Users Email')}}
            {{Form::text('email', $users->email, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div>
        
        
        <div class="form-group">
            <label for="suspend">Status</label>
            <select  name="suspend" id="suspend" class="form-control">
                {{-- <option value="" disabled> Select </option> --}}
                <option value="0" {{$users->suspend == '0' ? 'selected' : ''}}>Active</option>
                <option value="1" {{$users->suspend == '1' ? 'selected' : ''}}>Inactive</option>
            </select>
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