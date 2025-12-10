{{--@if(session('success'))--}}
{{--    <div class="alert alert-success text-center">--}}
{{--        {{ session('success') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--<table class="table table-bordered text-center align-middle">--}}
{{--    <thead class="table-dark">--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Cake Name</th>--}}
{{--        <th>Category</th>--}}
{{--        <th>Price (PKR)</th>--}}
{{--        <th>Image</th>--}}
{{--        <th>Actions</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}

{{--    <tbody>--}}
{{--    @foreach($cakes as $cake)--}}
{{--        <tr>--}}
{{--            <td>{{ $cake->id }}</td>--}}
{{--            <td>{{ $cake->name }}</td>--}}
{{--            <td>{{ $cake->category }}</td>--}}
{{--            <td>{{ $cake->price }}</td>--}}
{{--            <td>--}}
{{--                <img src="{{ asset('storage/' . $cake->image) }}" width="80" height="60">--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                <a href="{{ route('cakes.edit', $cake->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                <form action="{{ route('cakes.destroy', $cake->id) }}" method="POST" style="display:inline-block;">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this cake?')">Delete</button>--}}
{{--                </form>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
@extends('admin.layout')

@section('content')
    <div class="mt-3">
        <a href="{{ route('admin.cakes.create') }}" class="btn btn-success mb-3">Add New Cake</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cakes as $cake)
                <tr>
                    <td>{{ $cake->id }}</td>
                    <td>{{ $cake->name }}</td>
{{--                    <td>{{ $cake->category }}</td>--}}
                    <td>{{ $cake->category->name ?? 'No Category' }}</td>

                    <td>{{ $cake->price }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $cake->image) }}" width="80" height="60">
                    </td>
                    <td>
                        <a href="{{ route('admin.cakes.edit', $cake->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.cakes.destroy', $cake->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this cake?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
