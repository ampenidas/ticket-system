@extends('../layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Edit Inventory Item</h2>
            </div>
        </div>

    <form action="{{ route('inventory.update', $inventory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    @method('PUT')
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
                                    <label for="">Serial Number</label>
                                    <input type="text" class="form-control" value="{{$inventory->serial_number}}" placeholder="" name="serial_number">
                                </div>
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <select class="form-control custom-select" name="type">
                                        @foreach ($types as $type)
                                            <option value="{{ $type->type }}" @if ($inventory->type === $type->type) selected @endif > {{$type->type}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control custom-select" name="status">
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->status }}" @if ($inventory->status === $status->status) selected @endif> {{$status->status}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Definition</label>
                                    <textarea rows="5" class="form-control" name="definition">{{$inventory->definition}}
                                    </textarea>
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
                                <div class="form-group">
                                    <label for="">Assigned Customer</label>
                                    <input type="text" class="form-control" value="{{$inventory->assigned_customer}}" placeholder="" name="assigned_customer">
                                </div>
                                <div class="form-group">
                                    <label for="">Installation Date</label>
                                    <input type="date" class="form-control" value="{{$inventory->installation_date}}" placeholder="" name="installation_date">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea rows="5" class="form-control" placeholder="" name="description">{{$inventory->description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href=" {{route('inventory.index')}} " class="btn btn-danger">Cancel</a>
                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection
