@extends('layout.app')
@section('title', 'Create Product')
    
@section('content')
<form class="card p-5 shadow-lg" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
  @csrf
    <h1 class="text-center">Product Category</h1>
  <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" placeholder="ASUS,Iphone16...">
  </div>
  <div class="mb-3">
    <label class="form-label">Procuct Stock</label>
    <input type="number" class="form-control" name="stock" placeholder="0">
  </div>
  <div class="mb-3">
    <label class="form-label">Procuct Price</label>
    <input type="number" class="form-control" name="price" placeholder="0.00$">
  </div>
  <div class="mb-3">
    <label class="form-label">Procuct Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="mb-3">
   <select name="category_id" class="form-select" required>
        <option value="" disabled selected>-- Select Category --</option>
        @foreach ($categories as $cat)
            <option value="{{ $cat->id }}"
                {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
  </div>

  <div class="w-100 d-flex gap-3">
    <button type="submit" class="btn btn-primary w-50">Save</button>
    <a href="{{route('product.index')}}" class="btn btn-secondary w-50">Cancel</a>
  </div>
</form>
@endsection