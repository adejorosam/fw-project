@extends('layouts.tutor-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Student Submissions</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($assignments) > 0)
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Course
                                        </th>
                                        <th>
                                           Action 
                                        </th>
                                        <th>
                                            Date Submitted
                                        </th>
                                        
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        @foreach($assignments as $assignment)
                                        {{-- @foreach($tutorcourse as $course)
                                        @if($assignment->course_name == $course->name) --}}
                                        <tr>
                                            <td>
                                            <a href="{{url('download')}}/{{$assignment->id}}">{{$assignment->name}}</a>
                                            </td>
                                            <td>
                                                {{$assignment->course_name}} 
                                            </td>
                                            <td>
                                                <a href="{{url('assignment')}}/{{$assignment->id}}/edit">Grade</a>
                                            </td>
                                            <td>
                                                {{$assignment->created_at}}
                                             </td>
                                            {{-- @endif
                                            @endforeach --}}
                                            @endforeach
                                            @else
                                                <p>No submissions yet</p>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection