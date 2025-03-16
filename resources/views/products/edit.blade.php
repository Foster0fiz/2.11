@extends('layouts.app')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" value="{{ old('title', $product->title) }}" class="form-control @error('title') is-invalid @enderror" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $product->description) }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" class="form-control @error('price') is-invalid @enderror" required>
        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Update Product</button>
</form>
@endsection
