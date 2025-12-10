<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            Admin Panel
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.cakes.index') }}">Cakes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.orders.index') }}">Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('admin.logout') }}">Logout</a>
                </li>

            </ul>
        </div>

    </div>
</nav>
