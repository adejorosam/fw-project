@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Payment statuses</h1>
@if(count($payment_statuses) > 0)
    @foreach($payment_statuses as $payment_status)
        <div class="well mb-3">
            <h3><a href="{{url('/payment_status')}}/{{$payment_status->id}}">{{$payment_status->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No payment status found</p>
    @endif
</div>
<div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href="payment_status/create"> Create a payment status </a></p>
</div>
@endsection