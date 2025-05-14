@extends('admin.master')
@section('title','View products')
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Descripton</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Image</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->slug }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->status }}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('assets/img/' . $product->image) }}" alt="Product Image" width="100">
                    @else
                        No Image
                    @endif
                </td>
                </tr>
            @endforeach

            </table>
    </div>
</div>