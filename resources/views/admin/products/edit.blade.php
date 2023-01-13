@extends('layouts.app')

@section('content')


<div class="container mb-5 py-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1 class="py-5">Edit Product</h1>
    <form action="{{route('products.update', $product->id)}}" method="post" class="card p-3" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{old($product->title)}}" type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" aria-describedby="titleHlper" value="{{ old('title') }}">
            <small id=" titleHlper" class="text-muted">Replace product title here</small>
        </div>

        <div class="mb-3">
            <label for="image">Image</label>
            <div class="wrapper d-flex gap-3">
                <img width="150" class="img-fluid" src="{{asset('storage/' . $product->image)}}" alt="">
                <input type="file" name="image" id="image" class="form-control  @error('image') is-invalid @enderror" placeholder="" aria-describedby="ImageHelper">
            </div>
            <small id="imageHlper" class="text-muted">Replace product image here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" aria-describedby="descriptionHlper" value="{{ old('description') }}"></textarea>
            <small id=" descriptionHlper" class="text-muted">Replace product description here</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input value="{{old($product->price)}}" type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" aria-describedby="priceHlper" value="{{ old('price') }}"></input>
            <small id=" priceHlper" class="text-muted">Replace product price here</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection