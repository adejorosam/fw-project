@extends('layouts.admin-dashboard')
@section('content')
<div class="container">
    {!! Form::open(['action'=>'TutorController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('name',  'Tutor Name')}}
    {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Tutor Name"])}}
</div>
<div class="form-group">
    {{Form::label('email',  'Tutor Email')}}
    {{Form::text('email','', ['class' =>'form-control', 'placeholder' => "Tutor email"])}}
</div>
<div class="form-group row">
    <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    </div>
</div>
<div class="form-check form-check-inline"  >
    @foreach($courses as $course)
    
        <input class="form-check-input" type="checkbox" name="courses[]" value="{{$course->id}}">
        <label class="form-check-label" for="inlineCheckbox1">{{$course->name}}</label>
    
    @endforeach
  </div>
{{-- <div class="form-group">
    <label for="privilege">Pick a privilege</label>
    <select type="number" name="privilege_id" class="form-control" >
        @foreach ($privileges as $privilege)
            <option value="{{$privilege->id}}">{{$privilege->name}}</option>
        @endforeach
    </select>
</div> --}}
<div style="margin-top:15px;">
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection