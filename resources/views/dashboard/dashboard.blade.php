@extends('layouts.user-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        @foreach($currently_enrolled as $latest)
        {{-- @foreach($courses as $course) --}}
        {{-- @if($registered_course->course_id == $course->id) --}}
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

                                <p class="card-category">Currently enrolled in: <br>{{$latest->name}}</p>
                                <p class="card-title">Progress: 15%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">

                </div>
            </div>
        </div>
        {{-- @endif
        @endforeach --}}
        @endforeach

    </div>
    <div class="row">
        @foreach($recent_task as $task)
        @foreach($currently_enrolled as $enrolled)
        @if($task->course_name == $enrolled->name)
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <h5 class="card-title">Assignment for the week</h5>
                    <p class="card-category">Keep track of assignments given by your tutors and make sure to turn them in as early as possible</p>
                </div>
                
                <div class="card-body ">
                <p><a href="{{url('tasks')}}/{{$task->id}}"> {{$task->title}} </a></p>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @endforeach
    
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Courses Registered</h5>
                    <p class="card-category">List of registered courses</p>
                    <ul>
                    @foreach($registered_courses as $registered_course)
                    {{-- @foreach($courses as $course) --}}
                    {{-- @if($registered_course->course_id == $course->id) --}}
                        <li>
                            {{$registered_course->name}}
                        </li>
                    {{-- @endif
                    @endforeach --}}
                    @endforeach
                    </ul>
                </div>
                {{-- <div class="card-body">
                    <canvas id="chartEmail"></canvas>
                </div> --}}

            </div>
        </div>


    </div>
    @endsection
    
