{{--@extends('admin.layout')--}}

{{--@section('content')--}}

{{--    <h3>All Orders</h3>--}}

{{--    @if(session('success'))--}}
{{--        <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--    @endif--}}

{{--    <table class="table table-bordered text-center align-middle">--}}
{{--        <thead class="table-dark">--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>User</th>--}}
{{--            <th>Cake</th>--}}
{{--            <th>Quantity</th>--}}
{{--            <th>Total Price</th>--}}
{{--            <th>Status</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}

{{--        <tbody>--}}
{{--        @foreach($orders as $order)--}}
{{--            <tr>--}}
{{--                <td>{{ $order->id }}</td>--}}
{{--                <td>{{ $order->customer_name }}</td>--}}
{{--                <td>PKR {{ $order->total }}</td>--}}
{{--                <td>{{ $order->status }}</td>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">View</a>--}}
{{--                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display:inline">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

{{--        </tbody>--}}

{{--    </table>--}}

{{--@endsection--}}
@extends('admin.layout')

@section('content')

    <h3>All Orders</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

{{--    <table class="table table-bordered">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>Order ID</th>--}}
{{--            <th>Customer</th>--}}
{{--            <th>Cake Name</th>--}}
{{--            <th>Quantity</th>--}}
{{--            <th>Price</th>--}}
{{--            <th>Subtotal</th>--}}
{{--            <th>Status</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($orders as $order) <!-- Loop through all orders -->--}}
{{--        @foreach($order->items as $item) <!-- Loop through items of each order -->--}}
{{--        <tr>--}}
{{--            <td>{{ $order->id }}</td>--}}
{{--            <td>{{ $order->customer_name }}</td>--}}
{{--            <td>{{ $item->cake_name }}</td>--}}
{{--            <td>{{ $item->quantity }}</td>--}}
{{--            <td>${{ number_format($item->price, 2) }}</td>--}}
{{--            <td>${{ number_format($item->subtotal, 2) }}</td>--}}
{{--            <td>{{ $order->status }}</td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Total</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->total }}</td>
                <td>
                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option value="pending" @selected($order->status=='pending')>Pending</option>
                            <option value="processing" @selected($order->status=='processing')>Processing</option>
                            <option value="completed" @selected($order->status=='completed')>Completed</option>
                            <option value="canceled" @selected($order->status=='canceled')>Canceled</option>
                        </select>
                    </form>
                </td>

                <td>
                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary btn-sm">View</a>

                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
