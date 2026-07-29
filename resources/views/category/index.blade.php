@extends('layout.app')
@section('title', 'Category List')
    
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1 class="fw-bold">Category List</h1>
    <a href="{{route('category.create')}}" class="btn btn-primary">+Add Category</a>
</div>
<table class="table table-striped text-center align-middle">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <tr>
        <td>0987</td>
        <td>Electronic</td>
        <td>New Stock</td>
        <td>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
</table>
@endsection