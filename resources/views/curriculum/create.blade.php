@extends('layouts.app')
@section('title','Upload document | Findworka')
@section('content')
<div class="container">
{!! Form::open(['action'=>'CurriculumController@store', 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
<div class="form-group">
    <label for="file">File Select</label>
    <input required type="file" class="form-control" name="file">
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection