@extends('layouts.master')

@section('content')
    <div class="container">

        <h2>Users</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>


            </tr>
            </thead>
            <tbody>
            @foreach($data as $result)
                <tr>

                    <td>{{$result->id}}</td>
                    <td>{{$result->name}}</td>
                    <td>{{$result->email}}</td>
                    <td>
                        <a class="btn btn-xs btn-warning" href="{{route('admin.user.edit',['user'=> $result->id])}}">Edit</a>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

