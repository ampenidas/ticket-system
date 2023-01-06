@extends('../layout')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <a href=" {{ route('inventory.create') }}" class="btn btn-primary btn-md mb-3"><i class="bi bi-pencil-square"></i> Add Inventory Item</a>
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
                                        <th>Serial Number</th>
                                        <th>Assigned Customer</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Installation Date</th>
                                        <th>Operation</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($inventories as $inventory)
                                        <tr>
                                            <td>{{ $inventory->id }}</td>
                                            <td>{{ $inventory->serial_number}}</td>
                                            <td>{{ $inventory->assigned_customer }}</td>
                                            <td>{{ $inventory->type }}</td>
                                            <td>{{ $inventory->status }}</td>
                                            <td>{{ $inventory->installation_date }}</td>
                                            <td>
                                                <a href=" {{ route('inventory.edit', $inventory->id) }}" class="btn btn-primary btn-sm">
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                                <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" class="d-inline-block">
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
