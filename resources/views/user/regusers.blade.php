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
                            @if(count($users) > 0)
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
                                                <a href="{{url('/user')}}/{{$user->id}}" class="btn btn-warning">View User</a>
                                                {{-- <a href="{{url('/admin')}}/{{$user->id}}/edit" class="btn btn-warning">EDIT user</a> --}}
                                            </td>
                                            <td>
                                                {{-- <div style="margin-right:70px;"> --}}
                                                    @if($user->suspend == 0)
                                                        {{-- <div> --}}
                                                            <a style="margin-right:100px;" class=" btn btn-danger" href="{{route('users.disable', $user->id)}}" >Disable</a>
                                                        {{-- </div> --}}
                                                    @else
                                                        {{-- <div> --}}
                                                            <a class=" btn btn-primary" href="{{route('users.disable', $user->id)}}" >Enable</a>
                                                        {{-- </div> --}}
                                                    @endif
                                                
                                                </td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                        @else
                                            <p>No payments </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection