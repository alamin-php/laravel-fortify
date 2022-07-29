@extends('layouts.auth.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 product-form my-3 py-3">
          <form action="{{route('login')}}" method="POST">
            @csrf
            <h4 class="mb-3 text-center text-secondary">Login</h4>

            <div class="mb-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username" value="{{old('username')}}">
              @error('username')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            
            <div class="mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password" value="{{old('password')}}">
              @error('password')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
              <button class="btn btn-success" type="submit">Login</button>
              <a href="{{route('password.request')}}" class="text-default px-3">Forgot Password</a>
          </form>
        </div>
      </div>
@endsection