@extends('layouts.user-dashboard')
@section('title', 'Dashboard | Findworka')
@section('content')
@include('inc.message')
<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
        @if(Auth::user()->image)
        <img src="{{Auth::user()->image}}"  name="aboutme" width="140" height="140" class="img-circle">
        @else
        <img src="/storage/uploads/noimage.jpg"  name="aboutme" width="140" height="140" class="img-circle">
        @endif
        </a>
        <h3>{{Auth::user()->name}} </h3>
        <em>click my face for more</em>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About {{Auth::user()->name}}</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    @if(Auth::user()->image)
                    <img src="/storage/uploads/{{Auth::user()->image}}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    @else
                    <img src="/storage/pics/noimage.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    @endif
                    <h3 class="media-heading">{{Auth::user()->name}} </h3>
                    <ul class="list-group">
                        <li class="list-group-item">name: {{Auth::user()->name}}</li>
                        <li class="list-group-item">Email: {{Auth::user()->email}}</li>
                        {{-- <li class="list-group-item">Phone: {{Auth::user()->phone}}</li>
                        <li class="list-group-item">Status: {{Auth::user()->status}}</li> --}}
                    </ul>
                    </center>
                    <hr>
                    <center>
                    {{-- <p class="text-left"><strong>Bio: </strong><br>{{Auth::user()->about}}</p> --}}
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about {{Auth::user()->name}}</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
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
</center>
<br>
</main>
@endsection

        {{-- <div class="form-group">
            <h3> Your Course(s) </h3>
            <hr>
                @foreach($courses as $course)
                    <p> {{$course->name}}</p>
                @endforeach
        </div>  --}}
        
        
    {{-- {!! Form::close() !!}
    {{-- @include('inc.footer') --}}
    </div>
   
  
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

