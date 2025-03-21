@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <h1 class="text-center">Create New Product</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                    @error('price') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
@endsection
