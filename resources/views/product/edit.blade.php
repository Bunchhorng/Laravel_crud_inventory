@extends('layout.app')
@section('title', 'Edit Product')
    
@section('content')
<form class="card p-5 shadow-lg" method="POST" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <h1 class="text-center">Product Category</h1>
  <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Procuct Stock</label>
    <input type="number" class="form-control" name="stock" value="{{$product->stock}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Procuct Price</label>
    <input type="number" class="form-control" name="price" value="{{$product->price}}">
  </div>
  <div class="mb-3 border border-3 py-1 px-3">
    <label class="form-label">Current Image</label>
    <img src="{{ asset('storage/' . $product->image) }}" class="object-fit-cover" width="50px" height="50px" alt="">
  </div>
  <div class="mb-3">
    <label class="form-label">Procuct Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="mb-3">
   <select name="category_id" class="form-select" required>
        <option value="" disabled>-- Select Category --</option>

        @foreach ($categories as $cat)
            <option value="{{ $cat->id }}"
                {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
  </div>

  <div class="w-100 d-flex gap-3">
    <button type="submit" class="btn btn-primary w-50">Uodate</button>
    <a href="{{route('product.index')}}" class="btn btn-secondary w-50">Cancel</a>
  </div>
</form>
@endsection