@extends('layouts.tutor-dashboard')
@section('content')
<style>
    .heightened{
        height: 250px;
    }
    .margin-stuff{
        margin-top: 25px;
    }
</style>
<div class="row justify-content-center dash-row margin-stuff">
@foreach($registered_courses as $registered_course)
<div class="col-md-3 bg-white shadow-lg mr-5 my-2  border rounded-custom heightened"> 
    <i class="fa fa-graduation-cap mr-3 fa-fw"></i>
    
    {{-- <h1> Total number of student(s): {{count($students)}}</h1> --}}
    <h3> Student Management</h3>
    <p> Course Name : <br><b>{{$registered_course->name}}</b></p>
    <p> Total students : <b>{{count($tutorcourse->users()->get()) - 1}}</b></p>
    {{-- <i class="fa fa-user mr-3 fa-fw"></i> --}}
    <p><a href="{{url('students')}}"> View All Students </a></p>
</div>
@endforeach

@if(count($recent_tasks) > 0)
<div class="col-md-3 bg-white shadow-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Submission Management</h3>
    <p> Recent Assignment :<br> <b>{{end($recent_tasks)->title}}</b></p>
    <p> Total submissions : <b> {{count($num_submissions)}}</b></p>
    <p><a href="{{url('assignment')}}"> View All Submissions </a></p>
</div>
@else
<div class="col-md-3 bg-white shadow-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Submission Management</h3>
    <p> Recent submission(s) :<br> <b> Yet to give assignment</b></p>
    <p> Total submissions : <b> {{count($num_submissions)}}</b></p>
    <p><a href="{{url('assignment')}}"> View All Submissions </a></p>
</div>
@endif


@if(count($recent_tasks) > 0)
<div class="col-md-3 bg-white shadow-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3>
    <p> Recent submission(s) :<br> <b>{{end($recent_tasks)->title}}</b></p>
    <p> Total assignments : <b> {{count($tasks)}}</b></p>
    <p><a href="{{url('task')}}"> View All Assignments </a></p>
</div>
@else
<div class="col-md-3 bg-white shadow-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3>
    <p> Recent Assignment :<br> <b>Yet to give assignment</b></p>
    <p> Total assignments : <b> {{count($tasks)}}</b></p>
    <p><a href="{{url('task')}}"> View All Assignments </a></p>
</div>
@endif



</div>
</div>
 
@endsection
{{--
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
                                <a href={{url('students')}}> View Students </a>

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
                            <a href={{url('assignment')}}> View Submissions </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
       
        @endforeach

    </div>
    
    <div class="row">
        @if(count($recent_tasks) > 0)
        <div class="col-md-12">
            <div class="card" style="margin-left:0px;">
                <div class="card-header ">
                    <h5 class="card-title">Assignments</h5>
                    <p class="card-category">Keep track of assignments you give to your students</p>
                </div>
                
                <div class="card-body ">
                    <ul>
                    <li>{{end($recent_tasks)->title}}</li>
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
     --}}
