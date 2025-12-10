{{--@extends('layout')--}}

{{--@section('title', 'Our Cakes - Cake Bliss')--}}

{{--@section('content')--}}
{{--    <div class="container my-5">--}}

{{--        <!-- Search -->--}}
{{--        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">--}}
{{--            <h2 class="fw-bold text-pink mb-3 mb-md-0">Our Delicious Cakes</h2>--}}
{{--            <form action="{{ route('cakes.search') }}" method="GET" class="d-flex">--}}
{{--                <input type="text" name="q" class="form-control me-2" placeholder="Search cakes..." value="{{ request('q') }}">--}}
{{--                <button type="submit" class="btn btn-pink">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--        <!-- Categories -->--}}
{{--        @php $currentCategory = $category ?? 'all'; @endphp--}}
{{--        <ul class="nav nav-pills justify-content-center mb-4 gap-3">--}}
{{--            <li class="nav-item"><a class="nav-link {{ $currentCategory === 'all' ? 'active' : '' }}" href="{{ route('cakes.index', 'all') }}">All Cakes</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link {{ $currentCategory === 'regular' ? 'active' : '' }}" href="{{ route('cakes.index', 'regular') }}">Regular Cakes</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link {{ $currentCategory === 'customized' ? 'active' : '' }}" href="{{ route('cakes.index', 'customized') }}">Customized Cakes</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link {{ $currentCategory === 'wedding' ? 'active' : '' }}" href="{{ route('cakes.index', 'wedding') }}">Wedding Cakes</a></li>--}}
{{--        </ul>--}}

{{--        <!-- Cake Grid -->--}}
{{--        <div class="row g-4">--}}
{{--            @if(empty($cakes))--}}
{{--                <p class="text-center text-muted mt-3">No cakes found.</p>--}}
{{--            @else--}}
{{--                @foreach($cakes as $cake)--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-3">--}}
{{--                        <a href="{{ route('cakes.show', $cake['id']) }}" class="text-decoration-none text-dark">--}}
{{--                            <div class="card h-100 shadow-sm border-0 rounded-4">--}}
{{--                                <img src="{{ asset($cake['image']) }}" class="card-img-top" alt="{{ $cake['name'] }}">--}}
{{--                                <div class="card-body text-center">--}}
{{--                                    <h5 class="card-title text-pink fw-semibold">{{ $cake['name'] }}</h5>--}}
{{--                                    <p class="text-muted small mb-1">{{ $cake['description'] }}</p>--}}
{{--                                    <p class="fw-bold mb-3">PKR {{ $cake['price'] }}</p>--}}
{{--                                    <span class="btn btn-outline-pink btn-sm">View Details</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@extends('admin.layout')--}}

{{--@section('content')--}}
{{--    <div class="mt-3">--}}
{{--        <a href="{{ route('cakes.create') }}" class="btn btn-success mb-3">Add New Cake</a>--}}
{{--        @if(session('success'))--}}
{{--            <div class="alert alert-success">{{ session('success') }}</div>--}}
{{--        @endif--}}
{{--        <table class="table table-bordered">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>Name</th>--}}
{{--                <th>Category</th>--}}
{{--                <th>Price</th>--}}
{{--                <th>Image</th>--}}
{{--                <th>Actions</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($cakes as $cake)--}}
{{--                <tr>--}}
{{--                    <td>{{ $cake->id }}</td>--}}
{{--                    <td>{{ $cake->name }}</td>--}}
{{--                    <td>{{ $cake->category }}</td>--}}
{{--                    <td>{{ $cake->price }}</td>--}}
{{--                    <td><img src="{{ asset('storage/' . $cake->image) }}" width="80"></td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ route('cakes.edit', $cake->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                        <form action="{{ route('cakes.destroy', $cake->id) }}" method="POST" style="display:inline-block;">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this cake?')">Delete</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--@endsection--}}
@extends('layout')

@section('title', 'Our Cakes - Cake Bliss')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4 text-center text-pink">Our Cakes</h2>

{{--        <!-- Admin login button for non-admin users -->--}}
{{--        @if(!session()->get('isAdmin'))--}}
{{--            <div class="text-end mb-3">--}}
{{--                <a href="{{ route('admin.login') }}" class="btn btn-outline-dark">Admin Login</a>--}}
{{--            </div>--}}
{{--        @endif--}}

        <!-- Categories -->
        @php $currentCategory = $category ?? 'all'; @endphp
        <ul class="nav nav-pills justify-content-center mb-4 gap-3">
            <li class="nav-item">
                <a class="nav-link {{ $currentCategory === 'all' ? 'active' : '' }}" href="{{ route('frontend.cakes.index', 'all') }}">All Cakes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $currentCategory === 'regular' ? 'active' : '' }}" href="{{ route('frontend.cakes.index', 'regular') }}">Regular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $currentCategory === 'customized' ? 'active' : '' }}" href="{{ route('frontend.cakes.index', 'customized') }}">Customized</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $currentCategory === 'wedding' ? 'active' : '' }}" href="{{ route('frontend.cakes.index', 'wedding') }}">Wedding</a>
            </li>
        </ul>

        <!-- Cake Grid -->
        <div class="row g-4">
            @if($cakes->isEmpty())
                <p class="text-center text-muted mt-3">No cakes found.</p>
            @else
                @foreach($cakes as $cake)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('frontend.cakes.show', $cake->id) }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 rounded-4">
                                <img src="{{ asset('storage/' . $cake->image) }}" class="card-img-top" alt="{{ $cake->name }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-pink fw-semibold">{{ $cake->name }}</h5>
                                    <p class="text-muted small mb-1">{{ $cake->description }}</p>
                                    <p class="fw-bold mb-3">PKR {{ $cake->price }}</p>

                                    <span class="btn btn-outline-pink btn-sm">View Details</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            @endif
        </div>
    </div>
@endsection
