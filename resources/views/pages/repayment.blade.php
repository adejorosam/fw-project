@extends('layouts.app')
@section('title', 'Pay Outstanding Fee | Findworka')
@section('content')
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="container m-5" style="margin-bottom:40px;">
      
        <p>
            <div>
                <h3><b>Course Name</b> :{{Auth::user()->courses()->first()['name']}}</h4>
            </div>
            <div>
              <p><b>Remaining Balance</b> :{{Auth::user()->courses()->first()->pivot->remaining_balance}}</p>
            </div>
        </p>
  
    <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
    <input type="hidden" name="metadata" value="{{ json_encode($array = ['course_id' =>Auth::user()->courses()->first()['id'], 'course_name'=>Auth::user()->courses()->first()['name'], 'course_amount'=>Auth::user()->courses()->first()['price']]) }}">
    <p> Choose your preffered mode of payment(Remember you can only pay <b>thrice</b>) </p>
    @if(count($payments) >= 2)
    <div>
      <input type="radio" id="amount" name="amount" value="{{Auth::user()->courses()->first()->pivot->remaining_balance}}00">
      <label for="amount"><b>Pay all</b> : <b>{{Auth::user()->courses()->first()->pivot->remaining_balance}}</b></label>
    </div>
    @else
    <div>
      <label for="amount">Enter the amount below:</label><br>
      <input style="width:150px; border-color:black;" placeholder="Amount" type="number" id="customAmount"  name="amount">
    </div><br>
    <div>
      <input type="radio" id="amount" name="amount" value="{{Auth::user()->courses()->first()->pivot->remaining_balance}}00">
      <label for="amount"><b>Pay all</b> : <b>{{Auth::user()->courses()->first()->pivot->remaining_balance}}</b></label>
    </div>
    <div>
      <input type="radio" id="amount" name="amount" value="{{Auth::user()->courses()->first()->pivot->remaining_balance/2}}00">
      <label for="amount"><b>Pay</b> : <b>{{Auth::user()->courses()->first()->pivot->remaining_balance/2}}</b></label>
    </div>
    @endif
    <br>
    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!"  onclick="getInputValue()">
      <i class="fa fa-plus-circle "></i> Pay Now!
    </button>

  </div>
</form>

@endsection

<script>
  function getInputValue(){
      // Selecting the input element and get its value 
      var s = document.getElementById("customAmount");
      s.value = s.value * 100;
      // console.log(s.value);
  }
</script>

























