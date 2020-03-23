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
                                            Price(#)
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                        <th>
                                            Remaining Balance(#)
                                        </th>
                                        <th>
                                            Payment Plan
                                        </th>
                                        <th>
                                            Next Payment Date
                                        </th>
                                           
                                        <th>
                                            Action
                                        </th>

                                        {{-- <th>
                                            Tutor
                                        </th> --}}
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($mycourses as $mycourse)
                                        
                                        <tr>
                                            <td>
                                                {{$mycourse->name}}
                                            </td>
                                            <td>
                                                {{$mycourse->duration}}
                                            </td>
                                            <td>
                                                {{$mycourse->price}}
                                            </td>
                                            <td>
                                                <progress style="width:70px;" max="100" value="{{Auth::user()->courses()->first()->pivot->progress}}">
                    
                                            </td>
                                            @if(Auth::user()->courses()->first()->pivot->remaining_balance)
                                            <td>
                                                {{Auth::user()->courses()->first()->pivot->remaining_balance}}
                                            </td>
                                            @else
                                            <td>
                                                <p>Fully paid</p>
                                            </td>
                                            @endif
                                            <td>
                                                {{Auth::user()->courses()->first()->pivot->payment_status}}
                                            </td>
                                            @if(Auth::user()->courses()->first()->pivot->repayment_date)
                                            <td>
                                                {{ \Carbon\Carbon::parse(Auth::user()->courses()->first()->pivot->repayment_date)->format('d/m/Y')}}
                                            </td>
                                            @else
                                            <td>
                                                <p>Fully paid</p>
                                            </td>
                                            @endif
                                            <td> 
                                                <a href="{{url('/repay')}}"> Pay your remaining balance </a>
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