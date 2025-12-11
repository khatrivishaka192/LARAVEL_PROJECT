@extends('admin.layout')

@section('content')
    <div class="mt-3">
        <h2 style="color:#ff4fa7; font-weight:600; margin-bottom:20px;">Edit Cake</h2>
        <form action="{{ route('admin.cakes.update', $cake->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $cake->name }}" required>
            </div>
            <div class="mb-3">
                <label>Category</label>
                <select name="category" class="form-control" required>
                    <option value="regular" {{ $cake->category == 'regular' ? 'selected' : '' }}>Regular</option>
                    <option value="customized" {{ $cake->category == 'customized' ? 'selected' : '' }}>Customized</option>
                    <option value="wedding" {{ $cake->category == 'wedding' ? 'selected' : '' }}>Wedding</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="{{ $cake->price }}" required>
            </div>
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('storage/' . $cake->image) }}" width="80" class="mt-2">
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $cake->description }}</textarea>
            </div>
            <div class="mb-3">
                <label>Ingredients</label>
                <textarea name="ingredients" class="form-control">{{ $cake->ingredients }}</textarea>
            </div>
            <button type="submit" class="btn"
                    style="background-color:#ff4fa7; color:#fff; border:none; border-radius:5px; padding:6px 15px;">
                Update Cake
            </button>
        </form>
    </div>
@endsection
