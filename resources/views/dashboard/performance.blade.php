@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Your Assigments Result</h5>
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
                                            Remarks
                                        </th>
                                        <th>
                                            Course
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
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
                                            
                                            <td class="text">
                                                {{-- <a href="{{route('course.show', $course->id)}}" class="btn btn-warning">VIEW COURSE</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <p> No results </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection