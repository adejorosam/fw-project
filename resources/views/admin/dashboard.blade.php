@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                        <h3>All Admin Endpoints</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Endpoints </th>
                                <th></th>
                                <th>Description</th>
                                <th></th>
                                <th>Links</th>
                            </tr>
                            <tr>
                                <th> /user</th>
                                <th></th>
                                <th>Access all users</th>
                                <th></th>
                                <th><a href="/user" class="btn btn-primary">Users</a></th>
                                <th></th>
                            </tr>
                                <tr>
                                    <th> /program</th>
                                    <th></th>
                                    <th>Access all available programs</th>
                                    <th></th>
                                    <th><a href="/program" class="btn btn-primary">Programs</a></th>
                                    <th></th>
                                </tr>
                                <tr>
                                <th> /course </th>
                                    <th></th>
                                    <th>Access all available courses</th>
                                    <th></th>
                                <th><a href="/admin" class="btn btn-primary">Courses</a></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th> /privileges</th>
                                    <th></th>
                                    <th>Access all available privileges</th>
                                    <th></th>
                                    <th><a href="/privilege" class="btn btn-primary">Privileges</a></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th> /payment_statuses</th>
                                    <th></th>
                                    <th>Access all available programs</th>
                                    <th></th>
                                    <th><a href="/payment_status" class="btn btn-primary">Users Payment Statuses</a></th>
                                    <th></th>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection