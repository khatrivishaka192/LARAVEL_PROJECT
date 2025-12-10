@extends('admin.layout')

@section('content')
    <h3>Cakes in Category: "{{ $category->name }}"</h3>

    <a href="{{ route('admin.cakes.create') }}" class="btn btn-success mb-3">Add New Cake</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cakes as $cake)
            <tr>
                <td>{{ $cake->id }}</td>
                <td>{{ $cake->name }}</td>
                <td>{{ $cake->price }}</td>
                <td>
                    <a href="{{ route('admin.cakes.edit', $cake->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.cakes.destroy', $cake->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
