@extends('layouts.app')
@section('title', 'Roles')
@section('content')
@include('inc.sidemenu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        <h1> List of Roles </h1>
      @foreach ($roles as $role)
      <tr>
          
        <td>{{$role->id}}</td>
        <td>{{$role->name}}</td>
        <td><button class="btn btn-primary" ><a href="{{url('role')}}/{{$role->id}}/edit">Edit</a></button> <button class="btn btn-primary"><a href="{{url('role')}}/{{$role->id}}">View</button></a></td>
      </tr>
        @endforeach
    </tbody>
  </table>


      
@endsection