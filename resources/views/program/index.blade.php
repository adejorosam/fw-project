{{-- @extends('layouts.admin-dashboard')
@section('title')
    Available programs| Findworka
@endsection
@section('content')
<div class="container">
    <h1>Available Programs</h1>
@if(count($programs) > 0)
    @foreach($programs as $program)
        <div class="well mb-3">
            <h3><a href="{{url('/program')}}/{{$program->id}}">{{$program->name}}</a></h3>
        </div>
    @endforeach
@else
    <p>No programs found</p>
    @endif
</div>
<div class="container">
    <p ><a class="btn btn-primary mb-3" style="color:white;" href="program/create"> Create a program </a></p>
</div>
@endsection --}}

@extends('layouts.admin-dashboard')
@section('title', 'Available Programs | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available Programs</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>
                                        {{-- <th>
                                            Duration
                                        </th> --}}
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @if(count($programs) > 0)
                                        @foreach($programs as $program)
                                        <tr>
                                            <td>
                                                {{$program->id}}
                                            </td>
                                            <td>
                                                {{$program->name}} 
                                            </td>
                                            {{-- <td>
                                                {{$program->duration}} 
                                            </td> --}}
                                           
                                            <td class="text">
                                                <a href="{{url('/program')}}/{{$program->id}}" class="btn btn-warning">VIEW PROGRAM</a>
                                                {{-- <a href="{{url('/admin')}}/{{$program->id}}/edit" class="btn btn-warning">EDIT program</a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                            <p> No programs found </p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection