
@extends('admin.layout')

@section('content')
    <h3>Categories</h3>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-success mb-3">Add New Category</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('admin.categories.cakes', $cat->id) }}" class="btn btn-info btn-sm">View Cakes</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
