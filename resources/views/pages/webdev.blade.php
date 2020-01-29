@extends('layouts.app')

@section('title')
    Findworka | Web Development
@endsection


@section('content')
    {{-- @foreach($courses as $course)
        <h1> {{$course->programs->name}} </h1>
    @endforeach --}}
@endsection

{{-- @if(count($payment_statuses) > 0)
    @foreach($payment_statuses as $payment_status)
        <div class="well mb-3">
            <h3><a href="/payment_status/{{$payment_status->id}}">{{$payment_status->name}}</a></h3>
            <p>{{$payment_status->body}}</p>
        </div>
    @endforeach
@else --}}