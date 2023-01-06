@extends('../layout')

@section('content')

    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <a href=" {{ route('customers.create') }}" class="btn btn-primary btn-md mb-3"><i class="bi bi-pencil-square"></i> Add New Customer</a>
                </div>
            </div>
        </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Station Code</th>
                                    <th>Retailer Code</th>
                                    <th>Subject</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Operation</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->id }}</td>
                                        <td>{{ $customer->name}}</td>
                                        <td>{{ $customer->station_code }}</td>
                                        <td>{{ $customer->retailer_code }}</td>
                                        <td>{{ $customer->subject }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->city }}</td>
                                        <td>
                                            <a href=" {{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm">
                                                <i class='fas fa-edit'></i>
                                            </a>
                                            <form action="{{ route('customers.destroy',$customer->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class='fas fa-trash'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection
