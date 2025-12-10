
@extends('admin.layout')

@section('content')

    <h2 class="mb-4 text-center">Welcome Admin</h2>

    <div class="row justify-content-center">

        <!-- Cakes Module -->
        <div class="col-md-4">
            <div class="card shadow text-center p-3">
                <h4>Cakes Module</h4>
                <p>Manage all cakes</p>
                <a href="{{ route('admin.cakes.index') }}" class="btn btn-primary">Go to Cakes</a>
            </div>
        </div>

        <!-- Orders Module -->
        <div class="col-md-4">
            <div class="card shadow text-center p-3">
                <h4>Orders Module</h4>
                <p>View and manage orders</p>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-success">Go to Orders</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4 text-center">
                <h4>Categories Module</h4>
                <p>Manage all categories</p>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-warning">Go to Categories</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow p-4 text-center">
                <h4>Contact Module</h4>
                <p>Manage Contacts</p>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-warning">Go to Categories</a>
            </div>
        </div>
    </div>

@endsection
