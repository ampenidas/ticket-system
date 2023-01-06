@extends('../layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Customer Details</h2>
        </div>
    </div>

        <div class="form-group mb-3">
            <label for="">Name</label>
            <input type="text" disabled class="form-control" value=" {{$customer->name}}" placeholder="" name="name" aria-label="" aria-describedby="">
        </div>
        <div class="form-group mb-3">
            <label for="">Long Name</label>
            <input type="text" disabled class="form-control" value=" {{$customer->long_name}}" placeholder="" name="long_name" aria-label="" aria-describedby="">
        </div>
        <div class="form-group mb-3">
            <label for="">Station Code</label>
            <input type="text" disabled class="form-control" value=" {{$customer->station_code}}" placeholder="" name="station_code" aria-label="" aria-describedby="">
        </div>
        <div class="form-group mb-3">
            <label for="">Retailer Code</label>
            <input type="text" disabled class="form-control" value=" {{$customer->retailer_code}}" placeholder="" name="retailer_code" aria-label="" aria-describedby="">
        </div>
        <div class="form-group mb-3">
            <label for="">Subject</label>
            <input type="text" disabled class="form-control" value=" {{$customer->subject}}" placeholder="" name="subject" aria-label="" aria-describedby="">
        </div>
        <div class="form-group mb-3">
            <label for="">Phone</label>
            <input type="text" disabled class="form-control" value=" {{$customer->phone}}" placeholder="" name="phone" aria-label="" aria-describedby="">
        </div>
        <div class="form-group mb-3">
            <label for="">Address</label>
            <textarea rows="5" disabled class="form-control" placeholder="" name="address" aria-label="" aria-describedby=""> {{ $customer->address }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" disabled class="form-control" value=" {{$customer->city}}" placeholder="" name="address" aria-label="" aria-describedby="">
        </div>
@endsection
