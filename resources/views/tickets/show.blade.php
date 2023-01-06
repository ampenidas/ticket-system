@extends('../layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"> #{{$ticket->id}}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12">
                                <h4>Activity</h4>
                                @foreach($activities as $activity)
                                    <div class="post">
                                        <p> {{$activity->comment}}</p>
                                    </div>
                                @endforeach
                                <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="post mt-5">
                                        <input name="ticket_id" class="d-none" value="{{$ticket->id}}">
                                        <textarea rows="5" class="form-control" placeholder="" name="comment"></textarea>
                                    </div>
                                    <input type="submit" value="Add" class="btn btn-success float-right">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6 order-2">
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 order-2 order-md-2">
                                <h5 class="text-muted">Ticket Info</h5>
                                <br>
                                <div>
                                    <p class="text-sm">Subject
                                        <b class="d-block">{{$ticket->subject}}</b>
                                    </p>
                                    <p class="text-sm">Request Type
                                        <b class="d-block">{{$ticket->request_type}}</b>
                                    </p>
                                    <p class="text-sm">Authorized Personnel
                                        <b class="d-block"> {{$ticket->authorized_personnel}}</b>
                                    </p>
                                    <p class="text-sm">Request Description
                                        <b class="d-block"> {{$ticket->request_description}}</b>
                                    </p>
                                    <p class="text-sm">Request Status
                                        <b class="d-block"> {{$ticket->request_status}}</b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 order-2 order-md-2">
                                <h5 class="text-muted">Customer Info</h5>
                                <br>
                                <div>
                                    <p class="text-sm">Name
                                        <b class="d-block">{{$ticket->customer_name}}</b>
                                    </p>
                                    <p class="text-sm">Phone
                                        <b class="d-block">{{$ticket->phone}}</b>
                                    </p>
                                    <p class="text-sm">Address
                                        <b class="d-block"> {{$ticket->address}}</b>
                                    </p>
                                    <p class="text-sm">Location
                                        <b class="d-block"> {{$ticket->location}}</b>
                                    </p>
                                    <p class="text-sm">Partner
                                        <b class="d-block"> {{$ticket->partner}}</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="row">
                                    @foreach($files as $file)
                                        <div class="col-sm-2">
                                            <a href=" {{ asset('storage/' . $file->path)}}" data-toggle="lightbox" data-title="{{$file->title}}" data-gallery="gallery">
                                                <img src="{{ asset('storage/' . $file->path)}}" class="img-fluid mb-2" alt="{{$file->title}}"/>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="post mt-5">
                                    <input name="ticket_id" class="d-none" value="{{$ticket->id}}">
                                    <input type="file" name="file" >
                                </div>
                                <input type="submit" value="Add" class="btn btn-success float-right">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
