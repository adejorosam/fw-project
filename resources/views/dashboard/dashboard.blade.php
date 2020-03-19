@extends('layouts.user-dashboard')
@section('content')
<style>
    .heightened{
        height: 290px;
        /* border-width: 500px; */
    }
    .margin-stuff{
        margin-top: 25px;
        
    }    
</style>



<div class="row justify-content-center dash-row margin-stuff">
@if(count($registered_courses)>0)
@foreach($currently_enrolled as $latest)
<div class="col-md-3 bg-white shadown-lg mr-5 my-2  border rounded-custom heightened"> 
    <i class="fa fa-graduation-cap mr-3 fa-fw"></i>
    <h3> Course Management</h3>
    <p>Course Name: <b>{{$latest->name}}</b></p>
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
    <p><a href="{{url('/mycourses')}}"> View All Courses </a></p>
</div>
@endforeach
@else
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-graduation-cap mr-3 fa-fw"></i>
    <h3> Course Management</h3><br>
    <p> You are yet to enrol for a course</p>
<p> <b>Enrol for a course and start your journey</b> <a href="{{url('/')}}">here</a> </p>
</div>
@endif


@if(count($payments) > 0)
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-credit-card mr-3 fa-fw"></i>
    <h3> Payment Management</h3>
    @if(Auth::user()->courses()->first()->pivot->payment_status == 'fully-paid')
    <p> You have no outstanding balance to pay</p>
    @else
    <p>Next Payment Date :<br><b>{{ \Carbon\Carbon::parse(Auth::user()->courses()->first()->pivot->repayment_date)->format('d/m/Y')}}</b></p>
    <p> Remaining Balance(Naira) : <b> {{Auth::user()->courses()->first()->pivot->remaining_balance}}</b></p>
    <p> <a href="{{url("/repay")}}">Pay your outstanding fees </a></p>
    
    @endif
    <p><a href="{{url('paymenthistory')}}"> View your payment history </a></p>
</div>
@else
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-credit-card mr-3 fa-fw"></i>
    <h3> Payment Management</h3><br>
    <p> You are yet to make any payment</p>
</div>
@endif


@if(count($recent_task) > 0)
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3>
    <p> Latest Assignment :<br><a href="{{url('tasks')}}/{{end($recent_task)->id}}"><b>{{end($recent_task)->title}}</b></a></p>
    <p> Deadline :<br> <b>{{ \Carbon\Carbon::parse((end($recent_task))->deadline)->format('d/m/Y')}}</b></p>
    <p><a href="{{url('tasks')}}"> View All Assignments </a></p>
</div>
@else
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom heightened">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3><br>
    <p>None for now</p>
</div>
@endif



</div>
</div>
 
@endsection

