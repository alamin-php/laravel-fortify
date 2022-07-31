@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12 product-form my-3 py-3">
            <h4 class="mb-3 text-center text-secondary">All Students</h4>
            <a href="{{route('students.create')}}" class="btn btn-sm btn-primary float-end">Add Student</a>
            @if(session()->has('deleted'))
                <p class="text-danger">{{session()->get('deleted')}}</p>
            @endif
            @if(session()->has('success'))
                <p class="text-success">{{session()->get('success')}}</p>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Class</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($students)
                    @foreach($students as $key=>$row)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$row->name}}</td>
                        <td>{{$row->roll}}</td>
                        <td>{{$row->class_id}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>{{$row->address}}</td>
                        <td>
                            <a href="{{route('students.show', $row->id)}}" class="btn btn-sm btn-primary">Show</a>                            
                            <a href="{{route('students.edit', $row->id)}}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{route('students.destroy', $row->id)}}" method="post">
                                @method("DELETE")
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td>Data Not Found!</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @endsection