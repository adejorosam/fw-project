@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Users</h1>
@if(count($users) > 0)
    @foreach($users as $user)
        <div class="well mb-3">
            <h3><a href="{{url('/user')}}/{{$user->id}}">{{$user->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No users found</p>
    @endif
</div>
<div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href= "{{url('/user')}}/create"> Create a user </a></p>
</div>
@endsection