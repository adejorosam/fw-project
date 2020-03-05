@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($mycourses) > 0)
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Duration(Months)
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                        <th>
                                            Tutor
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach($progress as $movement) --}}
                                        @foreach($mycourses as $mycourse)
                                        
                                        <tr>
                                            <td>
                                                {{$mycourse->name}}
                                            </td>
                                            <td>
                                                {{$mycourse->duration}}
                                            </td>
                                            <td>
                                                #{{$mycourse->price}}
                                            </td>
                                            <td>
                                                {{$progress}}%
                                            </td>
                                             
                                            @foreach($mycourses as $mycourse) 
                                                @foreach($tutors as $tutor)
                                                @foreach($tutor->courses as $teacher)
                                            <td> 
                                                
                                                @if($teacher->id == $mycourse['id'])
                                                    {{$tutor->name}}
                                                @endif
                                                
                                            </td> 
                                            {{-- <td>
                                                {{$progress}}%
                                            </td> --}}
                                            {{-- @endforeach --}}
                                            @endforeach
                                            @endforeach
                                            @endforeach
                                            @endforeach
                                            @else
                                                <p> You have not registered for a course yet </p>
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