@extends('../layout')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Customer Edit</h2>
        </div>
    </div>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" value=" {{$customer->name}}" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="">Long Name</label>
                                    <input type="text" class="form-control" value=" {{$customer->long_name}}" placeholder="" name="long_name">
                                </div>
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input type="text" class="form-control" value=" {{$customer->subject}}" placeholder="" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" value=" {{$customer->phone}}" placeholder="" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea rows="5" class="form-control" placeholder="" name="address"> {{$customer->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">City</label>
                                    <select type="text" class="form-control" name="city">
                                        @foreach($cities as $city)
                                            <option value=" {{$city}} " @if ($customer->city === $city) selected @endif > {{ $city }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Other Info</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Station Code</label>
                                    <input type="text" class="form-control" value=" {{$customer->station_code}}" placeholder="" name="station_code">
                                </div>
                                <div class="form-group">
                                    <label for="">Retailer Code</label>
                                    <input type="text" class="form-control" value=" {{$customer->retailer_code}}" placeholder="" name="retailer_code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href=" {{route('customers.index')}} " class="btn btn-danger">Cancel</a>
                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </div>
    </form>
    </div>
@endsection
