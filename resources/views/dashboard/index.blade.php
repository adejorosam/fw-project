@extends('layouts.user-dashboard')
{{-- @extends('layouts.app') --}}
@include('inc.message')
@section('content')
{!! Form::open(['action'=>['DashboardController@update', Auth::user()->id], 'method' => 'POST', 'enctype'=>"multipart/form-data"]) !!}
        <div class="form-group">
            {{Form::label('name',  'Your Name')}}
            {{Form::text('name', Auth::user()->name, ['class' =>'form-control', 'placeholder' => "Your Name"])}}
        </div>
        {{-- <div class="form-group">
            <label for="">Upload an image</label>
            <input required type="file" class="form-control"  name="image" Auth::user()->image>
        </div> --}}
        <div class="form-group">
            {{Form::label('email',  'E-mail Address')}}
            {{Form::text('email', Auth::user()->email, ['class' =>'form-control', 'placeholder' => "E-mail Address"])}}
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-7 col-form-label text-md-left">{{ __('Password') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
            </div>
        </div>
         <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" name="image" value="{{Auth::user()->image}}"> 
        </div> 
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update', ['class'=>'btn btn-primary'])}}

        {{-- <div class="form-group">
            <h3> Your Course(s) </h3>
            <hr>
                @foreach($courses as $course)
                    <p> {{$course->name}}</p>
                @endforeach
        </div>  --}}
        
        
    {!! Form::close() !!}
    {{-- @include('inc.footer') --}}
    </div>
   
    @endsection 
{{--
    <div class="container-fluid mt-5">
    <div class="row">
        @foreach($registered_courses as $registered_course)
        @foreach($courses as $course)
        @if($registered_course->course_id == $course->id)
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
                                <p class="card-category">{{$course->title}}</p>
                                <p class="card-title">{{$registered_course->progress}}%
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">

                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <h5 class="card-title">Assignments</h5>
                    <p class="card-category">Keep track of assignments given by your tutors</p>
                </div>
                <div class="card-body ">
                    <ul>

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
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Courses Registered</h5>
                    <p class="card-category">List of registered courses</p>
                    <ul>
                    @foreach($registered_courses as $registered_course)
                    @foreach($courses as $course)
                    @if($registered_course->course_id == $course->id)
                        <li>
                            {{$course->title}}
                        </li>
                    @endif
                    @endforeach
                    @endforeach
                    </ul>
                </div>
                <div class="card-body ">
                    <canvas id="chartEmail"></canvas>
                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title">Class Schedule</h5>
                    <p class="card-category">Schedule for your classes</p>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Date
                                </th>
                                <th>
                                    Time
                                </th>
                                <th>
                                    Course
                                </th>
                                <th class="text"> </th>
                            </thead>
                            <tbody>
                            @foreach($schedules as $schedule)
                                <tr>
                                    <td>
                                        {{$schedule->date}}
                                    </td>
                                    <td>
                                        {{$schedule->time}}
                                    </td>
                                    <td>
                                        @foreach($courses as $course)
                                        @if($schedule->course_id == $course->id)
                                        {{$course->title}}
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}

