{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student list</h1>
@if(count($users) > 0)
    @foreach($users as $user)
        <div class="well mb-3">
            <h3><a href="{{url('/user')}}/{{$user->id}}">{{$user->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No student found </p>
    @endif
</div>
{{-- <div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href= "{{url('/user')}}/create"> Create a user </a></p>
</div> --}}
{{-- @endsection --}} --}}

@extends('layouts.admin-dashboard')
@section('title', 'Available users | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            E-mail
                                        </th>
                                        <th>
                                            Role
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        {{-- @foreach ($user->privileges as $privilege) --}}
                                        
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                {{$user->name}} 
                                            </td>
                                             <td>
                                                {{$user->email}} 
                                            </td>
                                            <td>
                                                {{$user->privilege->name}} 
                                            </td> 
                                           
                                            <td class="text">
                                                <a href="{{url('/user')}}/{{$user->id}}" class="btn btn-warning">VIEW USER</a>
                                                {{-- <a href="{{url('/admin')}}/{{$user->id}}/edit" class="btn btn-warning">EDIT user</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection