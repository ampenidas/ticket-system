@extends('../layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Edit Ticket</h2>
            </div>
        </div>

    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="customer_name">Name</label>
                                    <input type="text" class="form-control" value=" {{$ticket->customer_name}}" placeholder="" name="customer_name" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" value=" {{$ticket->phone}}" placeholder="" name="phone" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" value=" {{$ticket->address}}" placeholder="" name="address" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control" value=" {{$ticket->location}}" placeholder="" name="location" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Partner</label>
                                    <input type="text" class="form-control" value=" {{$ticket->partner}}" placeholder="" name="partner" aria-label="" aria-describedby="">
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
                                    <label for="">Subject</label>
                                    <input type="text" class="form-control" value=" {{$ticket->subject}}" placeholder="" name="subject" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Type</label>
                                    <input type="text" class="form-control" value=" {{$ticket->request_type}}" placeholder="" name="request_type" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea rows="5" class="form-control" placeholder="" name="request_description">{{$ticket->request_description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Authorized Personnel</label>
                                    <input type="text" class="form-control" value=" {{$ticket->authorized_personnel}}" placeholder="" name="authorized_personnel" aria-label="" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control custom-select" name="request_status">
                                        <option value="open" @if ($ticket->request_status === 'open') selected @endif> Open</option>
                                        <option value="waiting" @if ($ticket->request_status === 'waiting') selected @endif>Waiting </option>
                                        <option value="closed" @if ($ticket->request_status === 'closed') selected @endif>Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href=" {{route('tickets.index')}} " class="btn btn-danger">Cancel</a>
                        <input type="submit" value="Update" class="btn btn-success float-right">
                    </div>
                </div>
            </section>
        </div>
    </form>
        @foreach($files as $file)
        <img src="{{asset('storage' . $file->path)}}" alt=""/>
        @endforeach
        <form action=" {{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="text" name="ticket_id" class="form-control d-none" value=" {{$ticket->id}}"/>
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control"/>
                </div>
                <div class="col-md-6">
                    <input type="submit" class="btn btn-success" value="Upload File">
                </div>
            </div>
        </form>
@endsection
