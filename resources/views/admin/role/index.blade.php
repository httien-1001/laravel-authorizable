@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Roles</h2>
    <a class="btn btn-sm btn-danger" href="{{route('admin.role.create')}}">Add new</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Permissions</th>


        </tr>
        </thead>
        <tbody>
        @foreach($data as $result)
            <tr>

                <td>{{$result->id}}</td>
                <td>{{$result->name}}</td>
                <td >{{$result->permissions}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

