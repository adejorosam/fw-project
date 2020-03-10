{{-- @extends('layouts.app')
@section('title')
    Available tutors| Findworka
@endsection
@section('content')
<div class="container">
    <h1>Available tutors</h1>
@if(count($tutors) > 0)
    @foreach($tutors as $tutor)
        <div class="well mb-3">
            <h3><a href="{{url('/tutor')}}/{{$tutor->id}}">{{$tutor->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No tutors found</p>
    @endif
</div>
{{-- <div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href="tutor/create"> Create a tutor </a></p>
</div> --}}
{{-- @endsection --}} 

@extends('layouts.admin-dashboard')
@section('title', 'Available tutors | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Tutors</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($tutors)>0)
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
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($tutors as $tutor)
                                        @foreach ($tutor->courses as $course)
                                        
                                        <tr>
                                            <td>
                                                {{$tutor->id}}
                                            </td>
                                            <td>
                                                {{$tutor->name}} 
                                            </td>
                                            <td>
                                                {{$course->name}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('/tutor')}}/{{$tutor->id}}" class="btn btn-warning">View Tutor</a>
                                                {{-- <a href="{{url('/admin')}}/{{$tutor->id}}/edit" class="btn btn-warning">EDIT tutor</a> --}}
                                            </td>
                                            <td>
                                                {{-- <div style="margin-right:70px;"> --}}
                                                    @if($tutor->suspend == 0)
                                                        {{-- <div> --}}
                                                            <a style="margin-right:100px;" class=" btn btn-danger" href="{{route('users.disable', $tutor->id)}}" >Disable</a>
                                                        {{-- </div> --}}
                                                    @else
                                                        {{-- <div> --}}
                                                            <a class=" btn btn-primary" href="{{route('users.disable', $tutor->id)}}" >Enable</a>
                                                        {{-- </div> --}}
                                                    @endif
                                                
                                                </td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                        @else
                                                <p> No tutor </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection