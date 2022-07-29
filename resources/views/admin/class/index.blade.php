@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 product-form my-3 py-3">
            <h4 class="mb-3 text-center text-secondary">All Class</h4>
            <a href="{{route('class.create')}}" class="btn btn-sm btn-primary float-end">Add Class</a>
            @if(session()->has('deleted'))
                <p class="text-danger">{{session()->get('deleted')}}</p>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($class as $key=>$row)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td width="50%">{{$row->class_name}}</td>
                        <td>
                            <a href="{{route('class.edit', $row->id)}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{route('class.delete', $row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection