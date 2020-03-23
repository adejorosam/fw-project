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
    
    progress{
        margin-top: -9px;
        margin-bottom: 5px;
    }
    progress[value] {
    /* Get rid of the default appearance */
    appearance: none;
    
    /* This unfortunately leaves a trail of border behind in Firefox and Opera. We can remove that by setting the border to none. */
    border: none;
    
    /* Add dimensions */
    width: 100%; height: 20px;
    
    /* Although firefox doesn't provide any additional pseudo class to style the progress element container, any style applied here works on the container. */
      background-color: whiteSmoke;
      border-radius: 3px;
      box-shadow: 0 2px 3px rgba(0,0,0,.5) inset;
    
    /* Of all IE, only IE10 supports progress element that too partially. It only allows to change the background-color of the progress value using the 'color' attribute. */
    color: royalblue;
    
    position: relative;
    margin: 0 0 1.5em; 
}
progress[value]::-webkit-progress-bar {
    background-color: whiteSmoke;
    border-radius: 3px;
    box-shadow: 0 2px 3px rgba(0,0,0,.5) inset;
}

progress[value]::-webkit-progress-value {
    position: relative;
    
    background-size: 35px 20px, 100% 100%, 100% 100%;
    border-radius:3px;
    
    /* Let's animate this */
    animation: animate-stripes 5s linear infinite;
}

@keyframes animate-stripes { 100% { background-position: -100px 0; } }

/* Let's spice up things little bit by using pseudo elements. */

/* progress[value]::-webkit-progress-value:after {
    
    content: '';
    position: absolute;
    
    width:5px; height:5px;
    top:7px; right:7px;
    
    background-color: white;
    border-radius: 100%;
} */

/* Firefox provides a single pseudo class to style the progress element value and not for container. -moz-progress-bar */

progress[value]::-moz-progress-bar {
    /* Gradient background with Stripes */
    background-image:
    -moz-linear-gradient( 135deg,
                                                     transparent,
                                                     transparent 33%,
                                                     rgba(0,0,0,.1) 33%,
                                                     rgba(0,0,0,.1) 66%,
                                                     transparent 66%),
    -moz-linear-gradient( top,
                                                        rgba(255, 255, 255, .25),
                                                        rgba(0,0,0,.2)),
     -moz-linear-gradient( left, #09c, #f44);
    
    background-size: 35px 20px, 100% 100%, 100% 100%;
    border-radius:3px;
    
    /* Firefox doesn't support CSS3 keyframe animations on progress element. Hence, we did not include animate-stripes in this code block */
}

/* Fallback technique styles */
.progress-bar {
    background-color: whiteSmoke;
    border-radius: 3px;
    box-shadow: 0 2px 3px rgba(0,0,0,.5) inset;

    /* Dimensions should be similar to the parent progress element. */
    width: 100%; height:20px;
}

.progress-bar span {
    background-color: royalblue;
    border-radius: 3px;
    
    display: block;
    text-indent: -9999px;
}

p[data-value] { 
  
  position: relative; 
}

/* The percentage will automatically fall in place as soon as we make the width fluid. Now making widths fluid. */

/* p[data-value]:after {
    content: attr(data-value) '%';
    position: absolute; right:0;
}
 */




.html5::-webkit-progress-value  {
    /* Gradient background with Stripes */
    background-image:
    -webkit-linear-gradient( 135deg,
                                                     transparent,
                                                     transparent 33%,
                                                     rgba(0,0,0,.1) 33%,
                                                     rgba(0,0,0,.1) 66%,
                                                     transparent 66%),
    -webkit-linear-gradient( top,
                                                        rgba(255, 255, 255, .25),
                                                        rgba(0,0,0,.2)),
     -webkit-linear-gradient( left, #09c, #f44);
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
        <p id="progress" style="width:80%" data-value=""><b>{{Auth::user()->courses()->first()->pivot->progress}}% completed</b></p>
        <progress max="100" value="{{Auth::user()->courses()->first()->pivot->progress}}" class="html5">
        </progress>
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