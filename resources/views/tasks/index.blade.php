@extends('layouts.tutor-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Weekly task</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        @if(count($tasks) > 0)
                                        @foreach($tasks as $task)
                                        @foreach($usercourse as $course)
                                        @if($task->course_name == $course->name)
                                        <tr>
                                            <td>
                                                {{$task->title}}
                                            </td>
                                            <td>
                                                {{$task->course_name}} 
                                            </td>
                                            <td>
                                                <a href="{{url('task')}}/{{$task->id}}">View</a>
                                            </td>
                                            @endif
                                            @endforeach
                                            @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <p>No submissions yet</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection