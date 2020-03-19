@extends('layouts.user-dashboard')

@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">TRANSACTION HISTORY</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if(count($payments)>0)
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Transaction ID
                                        </th>
                                        <th>
                                            Amount Paid(Naira)
                                        </th>
                                        <th>
                                            Purpose of payment
                                        </th>
                                        <th>
                                            Payment date
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
                                                {{ \Carbon\Carbon::parse($payment->created_at)->format('d/m/Y')}}
                                            </td>
                                            @endforeach
                                            @else
                                            <p>You have no payment history</p>
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