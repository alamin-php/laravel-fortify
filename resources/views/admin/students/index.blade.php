@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 product-form my-3 py-3">
            <h4 class="mb-3 text-center text-secondary">All Students</h4>
            <a href="{{route('students.create')}}" class="btn btn-sm btn-primary float-end">Add Student</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $key=>$row)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->roll}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->address}}</td>
                        <td>
                            <a href="{{route('students.edit', $row->id)}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{route('students.destroy', $row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection