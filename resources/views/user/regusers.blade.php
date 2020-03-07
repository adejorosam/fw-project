@extends('layouts.admin-dashboard')
@section('title', 'Available users | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">All Users</h5>
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
                                            Course
                                        </th>

                                        <th>
                                            E-mail
                                        </th>

                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        @foreach ($user->courses as $course)
                                        
                                        <tr>
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                {{$user->name}} 
                                            </td>
                                            <td>
                                                {{$course->name}} 
                                            </td>
                                            <td>
                                                {{$user->email}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/user')}}/{{$user->id}}" class="btn btn-warning">VIEW USER</a>
                                                {{-- <a href="{{url('/admin')}}/{{$user->id}}/edit" class="btn btn-warning">EDIT user</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection