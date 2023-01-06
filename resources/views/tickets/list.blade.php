@extends('../layout')

@section('content')
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <a href=" {{ route('tickets.create') }}" class="btn btn-primary btn-md mb-3"><i class="bi bi-pencil-square"></i>Open New Ticket</a>
                </div>
            </div>
        </section>

        <section class="content pb-3">
            <div class="container-fluid">
                <div class="card card-row card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Open
                        </h3>
                    </div>
                    <div class="card-body">
                    @foreach($open as $open_ticket)
                        <div class="card card-light card-outline">
                            <div class="card-header">
                                <h5 class="card-title"> {{$open_ticket->subject}} </h5>
                                <div class="card-tools">
                                    <a href="{{route('tickets.show', $open_ticket->id)}}" class="btn btn-tool btn-link">#{{ $open_ticket->id }}</a>
                                    <a href=" {{ route('tickets.edit', $open_ticket->id) }} " class="btn btn-tool">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="card card-row card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Waiting
                        </h3>
                    </div>
                        <div class="card-body">
                            @foreach($waiting as $waiting_ticket)
                            <div class="card card-light card-outline">
                                <div class="card-header">
                                    <h5 class="card-title"> {{$waiting_ticket->subject}} </h5>
                                    <div class="card-tools">
                                        <a href="{{route('tickets.show', $waiting_ticket->id)}}" class="btn btn-tool btn-link">#{{ $waiting_ticket->id }}</a>
                                        <a href=" {{ route('tickets.edit', $waiting_ticket->id) }} " class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                        </div>
                </div>
                <div class="card card-row card-default">
                    <div class="card-header bg-info">
                        <h3 class="card-title">
                            Closed
                        </h3>
                    </div>
                    <div class="card-body">
                    @foreach($closed as $closed_ticket)
                            <div class="card card-light card-outline">
                                <div class="card-header">
                                    <h5 class="card-title"> {{$closed_ticket->subject}} </h5>
                                    <div class="card-tools">
                                        <a href=" {{route('tickets.show', $closed_ticket->id)}}" class="btn btn-tool btn-link">#{{ $closed_ticket->id }}</a>
                                        <a href="{{ route('tickets.edit', $closed_ticket->id) }}" class="btn btn-tool">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
