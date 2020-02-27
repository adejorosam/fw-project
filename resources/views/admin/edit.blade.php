@extends('layouts.admin-dashboard')

@section('content')
<div class="container">
    <h1>Edit User</h1>
        {!! Form::open(['action'=>['AdminController@update', $admin->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Users Name')}}
            {{Form::text('name', $admin->name, ['class' =>'form-control', 'placeholder' => "Users Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'Users Email')}}
            {{Form::text('email', $admin->email, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>
        </div>
        {{-- <div class="form-group">
            {{Form::label('suspend',  'Suspend')}}
            {{Form::text('suspend', $admin->suspend, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div> --}}
        
        <div class="form-group">
            <label for="suspend">Status</label>
            <select  name="suspend" id="suspend" class="form-control">
                {{-- <option value="" disabled> Select </option> --}}
                <option value="0" {{$admin->suspend == '0' ? 'selected' : ''}}>Active</option>
                <option value="1" {{$admin->suspend == '1' ? 'selected' : ''}}>Inactive</option>
            </select>
        </div>

        {{-- <div class="form-group">
            <label for="course">Select a course</label>
            <select type="number" name="course" class="form-control" >
                @foreach ($courses as $course)
                    <option value="{{$course->id}}" {{$course->id == $course->course_id ? 'selected' : ''}}>{{$course->name}}</option>
                @endforeach
            </select>
        </div>
         --}}
        
        {{Form::hidden('_method', 'PATCH')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection