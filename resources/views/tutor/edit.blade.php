@extends('layouts.admin-dashboard')

@section('content')
<div class="container">
    <h1>Edit User</h1>
        {!! Form::open(['action'=>['TutorController@update', $tutor->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name',  'Users Name')}}
            {{Form::text('name', $tutor->name, ['class' =>'form-control', 'placeholder' => "Users Name"])}}
        </div>
        <div class="form-group">
            {{Form::label('email',  'Users Email')}}
            {{Form::text('email', $tutor->email, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('suspend',  'Suspend')}}
            {{Form::text('suspend', $tutor->suspend, ['class' =>'form-control', 'placeholder' => "Users Email"])}}
        </div> --}}
        
        <div class="form-group">
            <label for="suspend">Suspend</label>
            <select  name="suspend" id="suspend" class="form-control">
                {{-- <option value="" disabled> Select </option> --}}
                <option value="0" {{$tutor->suspend == '0' ? 'selected' : ''}}>0</option>
                <option value="1" {{$tutor->suspend == '1' ? 'selected' : ''}}>1</option>
            </select>
        </div>

        <div class="form-group">
            <label for="course">Select a course</label>
            <select type="number" name="course" class="form-control" >
                @foreach ($courses as $course)
                    <option value="{{$course->id}}" {{$course->id == $course->course_id ? 'selected' : ''}}>{{$course->name}}</option>
                @endforeach
            </select>
        </div>
        
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection