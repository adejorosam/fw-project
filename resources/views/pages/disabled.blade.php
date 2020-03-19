@extends('layouts.app')
@section('title', 'Temporarily blocked | Findworka')
@section('content')
    <p> You have been temporarily suspended from accessing your account owing to your inability to pay before the due date </p>
    <p> Kindly pay <a href="{{url('/repay')}}">here</a> to continue your journey</p>
@endsection