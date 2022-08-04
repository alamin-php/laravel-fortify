@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 product-form my-3 py-3">
            <h4 class="mb-3 text-center text-secondary">Category List</h4>
            <a href="#" class="btn btn-sm btn-primary float-end">Add Category</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categorty Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $key=>$row)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td width="50%">{{$row->cat_name}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$category->links()}}
        </div>
    </div>
    @endsection