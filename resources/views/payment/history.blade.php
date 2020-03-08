@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">TRANSACTION HISTORY</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Transaction ID
                                        </th>
                                        <th>
                                            Amount Paid
                                        </th>
                                        <th>
                                            Purpose of payment
                                        </th>
                                        <th>
                                            Date & Time of payment
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>
                                                {{$payments->transaction_id}}
                                            </td>
                                            <td>
                                                #{{$payments->amount_paid}}
                                            </td>
                                            <td>
                                                {{$payments->payment_purpose}}
                                            </td>
                                            <td>
                                                {{$payments->created_at}}
                                            </td>
                                            
                                           
                                        </tr>   
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection