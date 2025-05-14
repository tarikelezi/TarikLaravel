@extends('admin.master')
@section('title','Insert New Post')
@section('content')
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="description">Description</label>
    <textarea name="description" id="description" required></textarea>
    <br>
    <label for="price">Price</label>
    <input type="number" name="price" id="price" required>
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image" required>
    <br>
    <label for="slug">Slug</label>
<input type="text" name="slug" id="slug" required>
<br>

<label for="category">Category</label>
<select name="category" id="category" required>
    <option value="">-- Select Category --</option>
    <option value="laptop">Laptop</option>
    <option value="phone">Phone</option>
    <option value="mask">Mask</option>
    <option value="other">Other</option>
</select>
<br>
<label for="quantity">Quantity</label>
<input type="number" name="quantity" id="quantity" required>
<br>
<label for="status">Status</label>
<select name="status" id="status" required>
    <option value="">-- Select Status --</option>
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
</select>
<br>
    <button type="submit">Insert Product</button>
</form>
@endsection