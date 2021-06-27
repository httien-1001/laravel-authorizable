@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Products</h2>
        <p><a class="btn btn-sm btn-danger" href="{{route('admin.product.create')}}">Add new</a></p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Sale price</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>

            </tr>

            </tbody>
        </table>
    </div>
@endsection

