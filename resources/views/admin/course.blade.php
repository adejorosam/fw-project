{{-- @extends('layouts.app')
@extends('layouts.admin-dashboard')
@section('title', 'Available Courses | Findworka')
@section('content')
<div class="container">
    <h1>Available Courses</h1>
    @foreach ($courses as $course)
    <h5>{{$course->id}}:<a href="{{url('/admin')}}/{{$course->id}}"> {{$course->name}} </a></h5>
    @endforeach
    </div> 
    <div class="container">
        <p ><a class="btn btn-primary mb-3" style="color:white;" href="admin/create"> Create a course </a></p>
    </div>   
@endsection --}}

@extends('layouts.tutor-dashboard')
@section('title', 'Available Courses | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Courses</h5>
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
                                            Amount
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td>
                                                {{$course->id}}
                                            </td>
                                            <td>
                                                {{$course->name}} 
                                            </td>
                                            <td>
                                                {{$course->price}} 
                                            </td>
                                           
                                            {{-- <td class="text">
                                                <a href="{{url('/admin')}}/{{$course->id}}" class="btn btn-warning">VIEW COURSE</a>
                                                <a href="{{url('/admin')}}/{{$course->id}}/edit" class="btn btn-warning">EDIT COURSE</a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection