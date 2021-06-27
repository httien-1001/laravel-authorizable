@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Categoies</h2>
        <a class="btn btn-sm btn-danger" href="{{route('admin.category.create')}}">Add new</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>

            </tr>
            </thead>
            <tbody>
            @foreach($data as $result)
            <tr>

                <td>{{$result->id}}</td>
                    <td>{{$result->name}}</td>
                    <td>{{$result->img}}</td>
                    <td>{{$result->status}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
