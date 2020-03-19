@extends('layouts.app')
@section('title', 'Pay | Findworka')
@section('content')
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="container m-5" style="margin-bottom:40px;">
        <p>
            <div>
                <h3>Course Name :{{$course->name}}</h4>
            </div>
            {{-- <div>
              <p>Course Price :{{$course->price}}</p>
            </div> --}}
        </p>
      
        
  
    <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
    <input type="hidden" name="metadata" value="{{ json_encode($array = ['course_id' => $course->id, 'course_name'=>$course->name, 'course_amount'=>$course->price]) }}">
    <p> Choose your preffered mode of payment(You are allowed to pay in three installments) </p>
    <div>
      {{-- <br> --}}
      <input type="radio" id="amount" name="amount" value="{{$course->price}}00">
      <label for="amount"><b>One time payment</b> : <b>{{$course->price}}</b></label>
    </div>
    <div>
      <input type="radio" id="amount" name="amount" value="{{$course->price/2}}00">
      <label for="amount"> <b>Installmental payment</b> : <b>{{$course->price/2}}</b></label>
    </div>
    <div>
      <input type="radio" id="amount" name="amount" value="{{$course->price/3}}00">
      <label for="amount"> <b>Installmental payment</b> : <b>{{$course->price/3}}</b> </label>
    </div>
      
    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
    <i class="fa fa-plus-circle "></i> Pay Now!
    </button>

  </div>
</form>



@endsection


























