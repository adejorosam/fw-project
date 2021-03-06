@extends('layouts.admin-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Weekly task</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        @if(count($tasks) > 0)
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Course
                                        </th>
                                        {{-- <th>
                                            Action 
                                        </th> --}}
                                        <th>
                                            Date Posted 
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        @foreach($tasks as $task)
                                        {{-- @foreach($usercourse as $course)
                                        @if($task->course_name == $course->name) --}}
                                        <tr>
                                            <td>
                                                {{$task->title}}
                                            </td>
                                            <td>
                                                {{$task->course_name}} 
                                            </td>
                                            {{-- <td>
                                                <a href="{{url('task')}}/{{$task->id}}">View</a>
                                            </td> --}}
                                            <td>
                                                {{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y')}}
                                            </td>
                                            {{-- @endif
                                            @endforeach --}}
                                            @endforeach
                                            @else
                                            <p>No assignments has been created yet</p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection