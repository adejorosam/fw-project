@extends('layouts.app')
@section('title')
    Submit your assignment | Findworka
@endsection
@section('content')
<div class="container">
    {!! Form::open(['action'=>'AssignmentBoardController@store', 'method' => 'POST','enctype'=>"multipart/form-data"]) !!}
    {{-- <div class="form-group">
        {{Form::label('name',  'Name')}}
        {{Form::text('name','', ['class' =>'form-control', 'placeholder' => "Name"])}}
    </div> --}}

    <div class="form-group">
        <label for="file">File Select</label>
        <input required type="file" class="form-control" name="file">
    </div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection