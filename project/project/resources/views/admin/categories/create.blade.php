
@extends('admin.layout')

@section('content')
    <h3>Add Category</h3>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
@endsection
