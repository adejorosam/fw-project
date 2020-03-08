@extends('layouts.app')
@section('title', 'Pay | Findworka')
@section('content')
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
      <div class="col-md-8 col-md-offset-2">
        <p>
            <div>
                <p>Course Name :{{$course->name}}</p>
                <p>Price : {{$course->price}}</p>
               
            </div>
        </p>
    <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
    <input type="hidden" name="amount" value="{{$course->price}}00"> {{-- required in kobo --}}
      <input type="hidden" name="metadata" value="{{$course_paid}}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
    {{-- <input type="hidden" name="quantity" value="{{$course->id}}"> --}}

        <p>
          <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
          <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
          </button>
        </p>
      </div>
    </div>
</form>
@endsection