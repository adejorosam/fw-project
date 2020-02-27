@extends('layouts.admin-dashboard')
@section('title', 'Available admins | Findworka')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">Available admins</h5>
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
                                        <th>
                                            E-mail
                                        </th>
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($admins as $admin)
                                      
                                        <tr>
                                            <td>
                                                {{$admin->id}}
                                            </td>
                                            <td>
                                                {{$admin->name}} 
                                            </td>
                                            <td>
                                                {{$admin->email}} 
                                            </td>
                                           
                                            <td class="text">
                                                <a href="{{url('admin')}}/{{$admin->id}}" class="btn btn-warning">VIEW</a>
                                                {{-- <a href="{{url('/admin')}}/{{$admin->id}}/edit" class="btn btn-warning">EDIT admin</a> --}}
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
@endsection