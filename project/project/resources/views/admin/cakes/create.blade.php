@extends('admin.layout')

@section('content')
    <div class="mt-3">
        <h2 style="color:#ff4fa7; font-weight:600; margin-bottom:20px;">Add New Cake</h2>
        <form action="{{ route('admin.cakes.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">Select Category</option> <!-- Prevents empty -->
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Ingredients</label>
                <textarea name="ingredients" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn"
                    style="background-color:#ff4fa7; color:#fff; border:none; border-radius:5px; padding:6px 15px;">
                Add Cake
            </button>
        </form>
    </div>
@endsection
