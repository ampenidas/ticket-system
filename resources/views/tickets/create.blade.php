@extends('layout')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Open New Ticket</h2>
        </div>
    </div>

    <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Customer Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="customer_name">Name</label>
                                    <select class="form-control custom-select" name="customer_name">
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->name }}"> {{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea rows="5" class="form-control" placeholder="" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <select class="form-control custom-select" name="location">
                                        <option selected disabled>Please Select</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city }}"> {{$city}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Partner</label>
                                    <select class="form-control custom-select" name="partner">
                                        <option selected disabled>Please Select</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city }}"> {{$city}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Ticket Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select class="form-control custom-select" name="request_type">
                                        @foreach($types as $type)
                                        <option value="{{ $type->type }}"> {{$type->type}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea rows="5" class="form-control" placeholder="" name="request_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Authorized Personnel</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="authorized_personnel">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control custom-select" name="request_status">
                                        <option value="open" selected>Open</option>
                                        <option value="waiting">Waiting </option>
                                        <option value="closed">Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href=" {{route('tickets.index')}} " class="btn btn-danger">Cancel</a>
                        <input type="submit" value="Create" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </div>
    </form>
    </div>
@endsection
