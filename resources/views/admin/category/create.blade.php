@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Add new category form</h2>
        <form role="form" method="POST" action="{{route('admin.category.store')}}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="pwd">Image:</label>
    <!--            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">-->
            </div>
    <!--        <div class="checkbox">
                <label><input type="checkbox" name="status"> A me</label>
                <label><input type="checkbox" name="status"> Remember me</label>
            </div>-->
            <button type="submit" class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('admin.category.index')}}">Cancel</a>
        </form>
    </div>
@endsection

