@extends('layouts.user-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        @if(count($registered_courses) > 0)
        @foreach($currently_enrolled as $latest)
       
       
        <div class="col-lg-5 col-md-5 col-sm-5 mt-n5">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-code text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category"><b>Currently enrolled in: <br>{{$latest->name}}</b></p>
                                <p class="card-title">Progress: <b>{{Auth::user()->courses()->first()->pivot->progress}}%</b></p>
                                <p class="card-title">Total number of assignments turned in: <b>{{$assignments}}</b></p>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        @endforeach
        @else
        <div class="col-lg-5 col-md-5 col-sm-5 mt-n5">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-code text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p> You are yet to register for a course </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        @endif

    </div>
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title"><b>Courses Registered</b></h5>
                    <p class="card-category">List of registered courses</p>
                    <ul>
                    @if(count($registered_courses)>0)
                    @foreach($registered_courses as $registered_course)
                    
                        <li>
                            {{$registered_course->name}}
                        </li>
                   
                    @endforeach
                    </ul>
                    @else
                    <p> You haven't enrolled for a course yet </p>
                    @endif
                </div>
            </div>
        </div> --}}


    </div>
    <div class="row">
        @if(count($recent_task) > 0)
        <div class="col-md-12" >
            @foreach($recent_task as $task)
            @foreach($currently_enrolled as $enrolled)
            @if($task->course_name == $enrolled->name)
            <div class="card" style="margin-left:01px;">
                <div class="card-header ">
                    <h5 class="card-title"><b>Assignment for the week</b></h5>
                    <p class="card-category">Keep track of assignments given by your tutors and make sure to turn them in as early as possible</p>
                </div>
                
                <div class="card-body ">
                    <h4><a href="{{url('tasks')}}/{{$task->id}}"> {{$task->title}} </a></h4>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        @endif
        @endforeach
        @endforeach
        {{-- @endif --}}
        
        </div>
        @else
        <div class="card" style="margin-left:01px;">
            <div class="card-header">
                <h5 class="card-title"><b>Assignment for the week</b></h5>
                <p class="card-category">Keep track of assignments given by your tutors and make sure to turn them in as early as possible</p>
                <div class="card-body ">
                    <p> No assignments yet. </p>
                </div>
                
            </div>
        @endif
       
    </div>
    
    
    @endsection