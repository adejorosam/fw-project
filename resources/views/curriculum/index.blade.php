@extends('layouts.app')
@section('title', 'Available Files | Findworka')
@section('content')
<div class="container">
    <h1>List of all available files</h1>
    @foreach ($files as $file)
        <h1>{{$file->name}} </a></h1>
    @endforeach
    </div> 
    <div class="container">
        <p ><a class="btn btn-primary mb-3" style="color:white;" href="curriculum/create"> Create a file </a></p>
    </div>   
@endsection