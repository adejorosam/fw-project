@extends('layouts.admin-dashboard')
@section('title')
    Tutors | Findworka
@endsection
@section('content')
<div class="container">
<h1 class="mt-3">{{$tutor->name}}</h1>
<h4>{{$tutor->name}}</h4>
<h4> {{$tutor->email}}</h4>

@foreach($courses as $course)

<div>
    
    <h4>{{$course->name}}</h4>
    
</div>
@endforeach
<hr>
<a class="btn btn-primary mb-3" href="{{url('/tutor')}}/{{$tutor->id}}/edit" class="btn btn-default">Edit</a>
{{-- {!!Form::open(['action'=> ['PaymentStatusController@destroy', $tutor->id], 'method'=>'POST', 'class'=>'pull-right'])!!} --}}
{{-- {{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger pull-right'])}} --}}
{!!Form::close()!!}
</div>
@endsection