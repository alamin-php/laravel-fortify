@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 product-form my-3 py-3">
            <form>

                <h4 class="mb-3 text-center text-secondary">Student Data</h4>
                <div class="mb-3">
                    <label for="student">Student Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{$data->name}}">
                </div>
                <div class="mb-3">
                    <label for="roll">Roll No</label>
                    <input type="text" name="roll" class="form-control" id="roll"
                        value="{{$data->roll}}">
                </div>
                <div class="mb-3">
                    <label for="class_id">Class Name</label>
                    <input type="text" class="form-control"
                        value="{{$data->class_id}}">
                </div>
                <div class="mb-3">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" class="form-control" id="email"
                        value="{{$data->email}}">
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone"
                        value="{{$data->phone}}">
                </div>
                <div class="mb-3">
                    <label for="addresss">Address</label>
                    <input type="text" name="address" class="form-control" id="address"
                        value="{{$data->address}}">
                </div>


                <a href="{{route('students.index')}}" class="btn btn-sm btn-success">Back</a>
            </form>
        </div>
    </div>
    @endsection