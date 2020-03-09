@extends('layouts.tutor-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        @foreach($registered_courses as $registered_course)
        
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
                                <p class="card-category">{{$registered_course->name}}</p>
                            <h3 class="card-title"> Total students : {{count($tutorcourse->users()->get()) - 1}}</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 mt-n5">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-2 col-md-1">
                            <div class="icon-big text-center icon-warning">
                                <i class="fa fa-code text-success"></i>
                            </div>
                        </div>
                        <div class="col-0 col-md-8">
                            <div class="numbers">
                                <p class="card-category"> Total Submissions </p>
                            <h3 class="card-title"> {{count($num_submissions)}}</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
       
        @endforeach

    </div>
    
    <div class="row">
        @if(count($tasks) > 0)
        <div class="col-md-12">
        @foreach($tasks as $task)
        @foreach($registered_courses as $course)
        @if($task->course_name == $course->name)
            <div class="card" style="margin-left:15px;">
                <div class="card-header ">
                    <h5 class="card-title">Assignments</h5>
                    <p class="card-category">Keep track of assignments you give to your students</p>
                </div>
                
                <div class="card-body ">
                    <ul>
                        <li>{{$task->title}}</li>
                    </ul>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
   
    @endif
    @endforeach
    @endforeach
</div>
@else
    <div class="card" style="margin-left:15px;">
        <div class="card-header">
            <h5 class="card-title"><b>Assignment for the week</b></h5>
            <p class="card-category"><p class="card-category">Keep track of assignments you give to your students</p></p>
            <div class="card-body ">
                <p> You have not given an assignments yet. </p>
            </div>
            
    </div>
@endif

</div>
   
    
@endsection
    
