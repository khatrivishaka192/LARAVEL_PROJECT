{{--<!-- ✅ Keep this single header -->--}}
{{--<nav class="navbar navbar-expand-lg navbar-light bg-white cakebliss-header">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">--}}
{{--            <img src="{{ asset('images/logo.png') }}" alt="Cake Bliss" height="52" style="margin-right:12px;">--}}
{{--            <div>--}}
{{--                <strong style="font-size:1.15rem;color:#ff5fa2;">Cake Bliss</strong><br>--}}
{{--                <small style="color:#777;">The sweetness of your happiness</small>--}}
{{--            </div>--}}
{{--        </a>--}}

{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"--}}
{{--                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="mainNav">--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>--}}
{{--                <li><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ url('/cakes') }}">Cakes</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>--}}
{{--                <li class="nav-item ms-3">--}}
{{--                    <a href="#" id="openCart" class="btn btn-outline-pink position-relative">--}}
{{--                        🛒 Cart--}}
{{--                        <span id="cartCount"--}}
{{--                              class="badge bg-pink text-white position-absolute top-0 start-100 translate-middle rounded-pill">--}}

{{--        </span>--}}
{{--                    </a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{-- ===================== ADMIN NAVBAR ===================== --}}
{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">--}}
{{--    <div class="container-fluid">--}}

{{--        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">--}}
{{--            Admin Panel--}}
{{--        </a>--}}

{{--        <div class="collapse navbar-collapse">--}}
{{--            <ul class="navbar-nav ms-auto">--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('admin.cakes.index') }}">Cakes</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('admin.orders.index') }}">Orders</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-danger" href="{{ route('admin.logout') }}">Logout</a>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</nav>--}}
<!-- ✅ Keep this single header -->
<nav class="navbar navbar-expand-lg navbar-light bg-white cakebliss-header">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Cake Bliss" height="52" style="margin-right:12px;">
            <div>
                <strong style="font-size:1.15rem;color:#ff5fa2;">Cake Bliss</strong><br>
                <small style="color:#777;">The sweetness of your happiness</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/cakes') }}">Cakes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                <li class="nav-item ms-3">
                    <a href="#" id="openCart" class="btn btn-outline-pink position-relative">
                        🛒 Cart
                        <span id="cartCount"
                              class="badge bg-pink text-white position-absolute top-0 start-100 translate-middle rounded-pill">

        </span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
