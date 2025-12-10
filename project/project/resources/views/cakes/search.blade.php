@extends('layout')

@section('title', 'Search results for ' . $query)

@section('content')
    <div class="container my-5">
        <h2 class="fw-bold text-pink mb-4">Search results for: "{{ $query }}"</h2>

        @if(count($cakes) === 0)
            <p class="text-center text-muted mt-3">No cakes found.</p>
        @else
            <div class="row g-4">
                @foreach ($cakes as $cake)
                    <div class="col-sm-6 col-md-4 col-lg-3 cake-card">
                        <a href="{{ route('cakes.show', $cake['id']) }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0 rounded-4 clickable-card">
                                <img src="{{ asset($cake['image']) }}" class="card-img-top" alt="{{ $cake['name'] }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-pink fw-semibold">{{ $cake['name'] }}</h5>
                                    <p class="text-muted small mb-1">{{ $cake['description'] }}</p>
                                    <p class="fw-bold mb-3">PKR {{ $cake['price'] }}</p>
                                    <span class="btn btn-outline-pink btn-sm">View Details</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-4 text-center">
            <a href="{{ route('cakes.index') }}" class="btn btn-outline-pink">← Back to Cakes</a>
        </div>
    </div>
@endsection
