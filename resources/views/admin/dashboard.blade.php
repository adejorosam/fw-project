
@extends('layouts.admin-dashboard')
@section('content')

<div class="row justify-content-center dash-row">
<div class="col-md-3 bg-white shadown-lg mr-5 my-2  border rounded-custom"> 
    <i class="fa fa-graduation-cap mr-3 fa-fw"></i>
    
    {{-- <h1> Total number of student(s): {{count($students)}}</h1> --}}
    <h3> Students Management</h3>
    {{-- <i class="fa fa-user mr-3 fa-fw"></i> --}}
    <p><a href="{{url('regusers')}}"> View All Students </a></p>

</div>
<div class="col-md-3 bg-white shadown-lg mr-5 my-2 border rounded-custom"> 
    <i class="fa fa-user mr-3 fa-fw"></i>
    <h3> Administrator Management</h3>
    <p><a href="{{url('admin')}}"> View All Administrators </a></p>
</div>

<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-chalkboard-teacher mr-3 fa-fw"></i>
    <h3> Tutor Management</h3>
    <p><a href="{{url('tutor')}}"> View All Tutors </a></p>
</div>
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-user mr-3 fa-fw"></i>
    <h3> User Management</h3>
    <p><a href="{{url('user')}}"> View All Users </a></p>
</div>
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-book-open mr-3 fa-fw"></i>
    <h3> Course Management</h3>
    <p><a href="{{url('course')}}"> View All Courses </a></p>
</div>
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-book-open mr-3 fa-fw"></i>
    <h3> Program Management</h3>
    <p><a href="{{url('program')}}"> View All Programs </a></p>
</div>
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-credit-card mr-3 fa-fw"></i>
    <h3> Payment Management</h3>
    <p><a href="{{url('payments')}}"> View All Payments </a></p>
</div>
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Submission Management</h3>
    <p><a href="{{url('submission')}}"> View All Submissions </a></p>
</div>
<div class="col-md-3 bg-white shadown-lg mr-5  my-2  border rounded-custom">
    <i class="fa fa-tasks mr-3 fa-fw"></i>
    <h3> Assignment Management</h3>
    <p><a href="{{url('assignments')}}"> View All Assignments </a></p>
</div>
</div>
 
@endsection