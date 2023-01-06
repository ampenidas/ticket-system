@extends('layout')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Add Customer</h2>
        </div>
    </div>

    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Main Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Long Name</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="long_name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Subject</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="subject">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="phone">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Address</label>
                                    <textarea rows="5" class="form-control" placeholder="" name="address"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">City</label>
                                    <select type="text" class="form-control" name="city">
                                        @foreach($cities as $city)
                                            <option value=" {{$city}} "> {{$city}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Other Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="">Station Code</label>
                                    <input type="text" class="form-control" value="" placeholder="" name="station_code">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Retailer Code</label>
                                    <input type="text" class="form-control" value=" " placeholder="" name="retailer_code">
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href=" {{route('customers.index')}} " class="btn btn-danger">Cancel</a>
                        <input type="submit" value="Create" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

    </form>
    </div>
@endsection
