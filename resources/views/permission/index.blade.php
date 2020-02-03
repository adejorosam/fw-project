@extends('layouts.app')
@section('title', 'Permission | Findworka')
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
        <h3> List of permissions </h3>
      @foreach($permissions as $permission)
      <tr>
        <td>{{$permission->id}}</td>
        <td>{{$permission->name}}</td>
        <td><button class="btn btn-primary" ><a href="{{url('permission')}}/{{$permission->id}}/edit">Edit</a></button> <button class="btn btn-primary"><a href="{{url('permission/')}}/{{$permission->id}}">View</button></a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection