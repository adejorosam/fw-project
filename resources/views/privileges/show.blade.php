@extends('layouts.app')
@section('title')
    Privilege  | Findworka
@endsection
@section('content')
<div class="container">
    <a href="/privilege" class="btn btn-default">Go back</a>
<h1 class="mt-3">{{$privileges->name}}</h1>
<div>
    <h4>{{$privileges->name}}</h4>
</div>
<hr>
<a class="btn btn-primary mb-3" href="{{url('/privilege')}}/{{$privileges->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=> ['PrivilegesController@destroy', $privileges->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}}
{!!Form::close()!!}
</div>
@endsection