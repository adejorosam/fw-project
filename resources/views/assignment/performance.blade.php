@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Your Assigments Result</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        {{-- <th>
                                            Duration(Months)
                                        </th> --}}
                                        {{-- <th>
                                            Price
                                        </th> --}}
                                        <th>
                                            Remarks
                                        </th>
                                        <th>
                                            Course
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        
                                        {{-- @foreach($courses as $course)
                                        @if($mycourse->course_id == $course->id) --}}
                                        @foreach($assignments as $assignment)
                                        <tr>
                                            <td>
                                                {{$assignment->name}}
                                            </td>
                                            <td>
                                                {{$assignment->remarks}} 
                                            </td>
                                            <td>
                                                {{$assignment->course_name}} 
                                            </td>
                                            {{-- @foreach($assignment->courses as $course) --}}
                                            {{-- <td>
                                                {{$course->name}}
                                            </td> --}}
                                            {{-- @endforeach --}}
                                             <td>
                                                {{-- {{$mycourse->progress}}% --}}
                                            </td>
                                            {{-- @foreach($mycourses as $mycourse) 
                                                @foreach($tutors as $tutor)
                                                @foreach($tutor->courses as $teacher)
                                            <td> 
                                                
                                                @if($teacher->id == $mycourse['id'])
                                                    {{$tutor->name}}
                                                @endif
                                                
                                            </td> 
                                            @endforeach
                                            @endforeach
                                            @endforeach --}}
                                            <td class="text">
                                                {{-- <a href="{{route('course.show', $course->id)}}" class="btn btn-warning">VIEW COURSE</a> --}}
                                            </td>
                                        </tr>
                                        {{-- @endif
                                        @endforeach --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection