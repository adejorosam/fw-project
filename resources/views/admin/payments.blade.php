@extends('layouts.admin-dashboard')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">PAYMENT HISTORY</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        @if(count($payments) > 0)
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Transaction ID
                                        </th>
                                        <th>
                                            Amount Paid(#)
                                        </th>
                                        <th>
                                            Payment Purpose
                                        </th>
                                        <th>
                                            Payment mode
                                        </th>
                                        <th>
                                            Date and time of payment 
                                        </th>
                                        <th class="text"> </th>
                                    </thead>
                                    <tbody>
                                        @foreach($payments as $payment)
                                       
                                        <tr>
                                            <td>
                                                {{$payment->transaction_id}}
                                            </td>
                                            <td>
                                                {{$payment->amount_paid}} 
                                            </td>
                                            
                                            <td>
                                                {{$payment->payment_purpose}} 
                                            </td>
                                            <td>
                                                {{$payment->payment_status->name}} 
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($payment->created_at)->format('d/m/Y')}}
                                            </td>
                                            
                                            @endforeach
                                            @else
                                            <p>No payments has been created yet</p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection