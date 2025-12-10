
{{--@extends('layout')--}}

{{--@section('title', 'Your Cart - Cake Bliss')--}}

{{--@section('content')--}}

{{--    <div class="container my-5">--}}
{{--        <h2 class="text-center mb-4 text-pink">🛒 Your Cart</h2>--}}


{{--        @if(count($cart) === 0)--}}
{{--            <p class="text-center text-muted">Your cart is empty!</p>--}}
{{--            <div class="text-center mt-3">--}}
{{--                <a href="{{ url('/cakes') }}" class="btn btn-outline-pink">Back to Cakes</a>--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="table-responsive">--}}
{{--                <table class="table align-middle shadow-sm">--}}
{{--                    <thead class="table-light">--}}
{{--                    <tr>--}}

{{--                        <th>Cake Name</th>--}}
{{--                        <th>Price</th>--}}
{{--                        <th>Pounds</th>--}}
{{--                        <th>Quantity</th>--}}
{{--                        <th>Total</th>--}}
{{--                        <th></th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($cart as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $item['name'] }}</td>--}}
{{--                            <td>PKR {{ number_format($item['price'], 0) }}</td>--}}
{{--                            <td>{{ $item['pounds'] }}</td>--}}
{{--                            <td>{{ $item['quantity'] }}</td>--}}
{{--                            <td>PKR {{ number_format($item['total'], 0) }}</td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}

{{--            <div class="text-end mt-4">--}}
{{--                <h5>Total: <span class="text-pink">PKR {{ number_format($total, 0) }}</span></h5>--}}
{{--                <a href="{{ url('/checkout') }}" class="btn btn-pink">Proceed to Checkout</a>--}}
{{--                <a href="{{ url('/cakes') }}" class="btn btn-outline-pink">➕ Add More Cakes</a>--}}
{{--            </div>--}}
{{--        @endif--}}


{{--    </div>--}}
{{--@endsection--}}

@extends('layout')

@section('title', 'Your Cart - Cake Bliss')

@section('content')

    <div class="container my-5">
        <h2 class="text-center mb-4 text-pink">🛒 Your Cart</h2>


        @if(count($cart) === 0)
            <p class="text-center text-muted">Your cart is empty!</p>
            <div class="text-center mt-3">
                <a href="{{ url('/cakes') }}" class="btn btn-outline-pink">Back to Cakes</a>
            </div>
        @else
            <div class="table-responsive">
                <table class="table align-middle shadow-sm">
                    <thead class="table-light">
                    <tr>

                        <th>Cake Name</th>
                        <th>Price</th>
                        <th>Pounds</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>PKR {{ number_format($item['price'], 0) }}</td>
                            <td>{{ $item['pounds'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>PKR {{ number_format($item['total'], 0) }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-4">
                <h5>Total: <span class="text-pink">PKR {{ number_format($total, 0) }}</span></h5>
                <a href="{{ url('/checkout') }}" class="btn btn-pink">Proceed to Checkout</a>
                <a href="{{ url('/cakes') }}" class="btn btn-outline-pink">➕ Add More Cakes</a>
            </div>
        @endif


    </div>
@endsection
