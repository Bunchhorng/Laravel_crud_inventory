@extends('layout.app')
@section('title', 'Product List')
    
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="fw-bold">Product List</h1>
    <a href="{{route('product.create')}}" class="btn btn-primary">+Add Product</a>
</div>
<table class="table table-bordered text-center align-middle">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->stock}}</td>
            <td>{{$pro->price}}</td>
            <td>{{ $pro->category->name }}</td>
            <td>
                <img src="{{ asset('storage/' . $pro->image) }}" class="object-fit-cover" width="50px" height="50px" alt="">
            </td>
            <td class="d-flex justify-content-center gap-2">
                <a href="{{route('product.edit', $pro->id)}}" class="btn btn-warning">Edit</a>
                <form action="" method="post"
                    onclick="return confirm('Are you sure to delete this category?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
{{ $products->links() }}
@endsection