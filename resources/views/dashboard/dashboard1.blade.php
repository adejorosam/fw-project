@extends('layouts.user-dashboard')
@section('content')
<style>
    .heightened{
        height: 250px;
    }
    .margin-stuff{
        margin-top: 100px;
    }
</style>
@if(count($registered_courses)>0)
@foreach($currently_enrolled as $latest)
<div class="row justify-content-center dash-row margin-stuff">
{{-- @foreach($registered_courses as $registered_course) --}}
<div class="col-md-3 bg-white shadown-lg mr-5 my-2  border rounded-custom heightened"> 
    <i class="fa fa-graduation-cap mr-3 fa-fw"></i>
    
    {{-- <h1> Total number of student(s): {{count($students)}}</h1> --}}
    <h3> Course Management</h3>
    Currently enrolled in: <br>{{$latest->name}}
    @foreach($mycourses as $mycourse) 
    @foreach($tutors as $tutor)
    @foreach($tutor->courses as $teacher)
    <td> 
        
        @if($teacher->id == $mycourse['id'])
        <p class="card-title">Tutor: <b>{{$tutor->name}}</b></p>
        @endif
        
    </td> 
    @endforeach
    @endforeach
    @endforeach
    <p class="card-title">Progress: <b>{{Auth::user()->courses()->first()->pivot->progress}}%</b></p>
    <p class="card-title">Total number of assignments turned in: <b>{{$assignments}}</b></p>
    <p><a href="{{url('/mycourses')}}"> View All Courses </a></p>
</div>
@endforeach
@else
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-graduation-cap mr-3 fa-fw"></i>
    <h3> Course Management</h3>
    <p> You are yet to enrol for a course</p>
    {{-- <p> Recent submission(s) :<br> <b> Yet to give assignment</b></p>
    <p> Total submissions : <b> {{count($num_submissions)}}</b></p>
    <p><a href="{{url('assignment')}}"> View All Submissions </a></p> --}}
</div>
@endif


@if(count($payments) > 0)
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-credit-card mr-3 fa-fw"></i>
    <h3> Payment Management</h3>
    <p> Next Payment Date :<br> <b></b>{{Auth::user()->courses()->first()->pivot->repayment_date}}</p>
    <p> Remaining Balance : <b> {{Auth::user()->courses()->first()->pivot->remaining_balance}}</b></p>
    <p> Pay your outstanding fees </p>
    <p><a href="{{url('paymenthistory')}}"> View your payment history </a></p>
</div>
@else
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-credit-card mr-3 fa-fw"></i>
    <h3> Payment Management</h3>
    <p> You are yet to make any payment</p>
    {{-- <p> Recent submission(s) :<br> <b> Yet to give assignment</b></p>
    <p> Total submissions : <b> {{count($num_submissions)}}</b></p>
    <p><a href="{{url('assignment')}}"> View All Submissions </a></p> --}}
</div>
@endif


@if(count($recent_task) > 0)
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3>
    <p> Latest Assignment :<br><a href="{{url('tasks')}}/{{end($recent_task)->id}}"><b>{{end($recent_task)->title}}</b></a></p>
    <p> Deadline :<br> <b>{{end($recent_task)->deadline}}</b></p>
    <p><a href="{{url('task')}}"> View All Assignments </a></p>
</div>
@else
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3>
    <p> Latest Assignment :<br> <b>None for now</b></p>
</div>
@endif



</div>
</div>
 
@endsection



@endsection











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
                                @foreach($mycourses as $mycourse) 
                                                @foreach($tutors as $tutor)
                                                @foreach($tutor->courses as $teacher)
                                            <td> 
                                                
                                                @if($teacher->id == $mycourse['id'])
                                                <p class="card-title">Tutor: <b>{{$tutor->name}}</b></p>
                                                @endif
                                                
                                            </td> 
                                            @endforeach
                                            @endforeach
                                            @endforeach
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
    


    </div>
    <div class="row">
        @if(count($recent_task) > 0)
        <div class="col-md-12" >
            <div class="card" style="margin-left:15px;">
                <div class="card-header ">
                    <h5 class="card-title"><b>Assignment for the week</b></h5>
                    <p class="card-category">Keep track of assignments given by your tutors and make sure to turn them in as early as possible</p>
                </div>
                
                <div class="card-body ">
                    <h4><a href="{{url('tasks')}}/{{end($recent_task)->id}}"> {{end($recent_task)->title}} </a></h4>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-history"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="card" style="margin-left:15px;">
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