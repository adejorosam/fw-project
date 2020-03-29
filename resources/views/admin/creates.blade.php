@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action'=>'AdminController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Admin Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Admin Name"])}}
</div>
<div class="form-group">
    {{Form::label('email',  'Admin Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => "Admin Email"])}}
</div>
<div class="form-group row">
    <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
</div>
{{-- <div class="form-group">
    {{Form::label('password',  'Password')}}
    {{Form::text('password','', ['class' =>'form-control', 'placeholder' => "Password"])}}
</div> --}}
{{-- <div class="form-group">
    <label for="privilege">Pick a privilege</label>
    <select type="number" name="privilege_id" class="form-control" >
        @foreach ($privileges as $privilege)
            <option value="{{$privilege->id}}">{{$privilege->name}}</option>
        @endforeach
    </select>
</div> --}}
{{-- <div class="form-group">
    <label for="course">Pick a course</label>
    <select type="number" name="course" class="form-control" >
        @foreach ($courses as $course)
            <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
    </select>
</div> --}}


{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection