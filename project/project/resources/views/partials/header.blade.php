
@php
    $isAdmin = request()->is('admin/*');
@endphp

@if($isAdmin)
    {{-- ADMIN HEADER --}}
    <nav class="navbar navbar-expand-lg bg-light" style="background:#ffeaf3 !important;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('images/logo.png') }}" height="60">
                <div class="ms-2">
                    <strong style="font-size:1.4rem;color:#ff4fa7;">Cake Bliss Admin</strong><br>
                    <small>Management Dashboard</small>
                </div>
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.cakes.index') }}">Cakes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.categories.index') }}">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.orders.index') }}">Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.contacts.index') }}">Contact</a></li>
                <li class="nav-item ms-3">
                    <a href="{{ route('admin.logout') }}" class="btn btn-outline-danger">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

@else
    {{-- FRONTEND HEADER --}}

    <nav class="navbar navbar-expand-lg bg-light" style="background:#ffeaf3 !important;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" height="50">
                <div class="ms-2">
                    <strong style="color:#ff4fa7;">Cake Bliss</strong><br>
                    <small>The sweetness of your happiness</small>
                </div>
            </a>

            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
                <li><a class="nav-link" href="{{ url('/cakes') }}">Cakes</a></li>
                <li><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                <div class="position-relative me-4">
{{--                    <input type="text" id="liveSearch" class="form-control"--}}
{{--                           placeholder="Search cakes..." autocomplete="off"--}}
{{--                           style="border-radius:12px;">--}}

{{--                    <!-- Dropdown Results -->--}}
{{--                    <div id="searchResultBox" class="position-absolute w-100 bg-white shadow rounded mt-1"--}}
{{--                         style="display:none; max-height:250px; overflow-y:auto; z-index:999;">--}}
{{--                    </div>--}}
                    <form action="{{ route('frontend.cakes.search') }}" method="GET">
                        <input type="text" name="query" id="liveSearch" class="form-control" placeholder="Search cakes...">
                        <div id="searchResultBox" class="list-group position-absolute w-100" style="z-index:1000;"></div>
                    </form>

                </div>


                <li class="nav-item ms-3">
                    <a class="btn btn-outline-pink">🛒 Cart</a>
                </li>
            </ul>
        </div>
    </nav>
@endif
