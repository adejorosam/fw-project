@extends('layouts.tutor-dashboard')
@section('title', 'Available students | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Students</h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            @if(count($students) > 0)
                                <table class="table">
                                    
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            E-mail
                                        </th>
                                        <th>
                                            Course
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $student)
                                        @foreach ($student->courses as $course)
                                        @foreach($tutor as $teacher)
                                        @if($teacher->name == $course->name)
                                       
                                        <tr>
                                            <td>
                                                {{$student->id}}
                                            </td>
                                            <td>
                                                {{$student->name}} 
                                            </td>
                                            
                                            <td>
                                                {{$student->email}} 
                                            </td>
                                            <td>
                                                {{$course->name}} 
                                            </td>
                                        @endif
                                        @endforeach
                                        @endforeach
                                        @endforeach
                                        @else
                                            <p> No students available </p>
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