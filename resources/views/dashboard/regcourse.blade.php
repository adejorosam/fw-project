@extends('layouts.app')
@section('title','Registered Courses')
@section('content')
 {{Auth::user()->courses()}}
 <h1> Hello, how are you doing?</h1>
@endsection