@extends('layouts.auth.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-md-6 product-form my-3 py-3">
          <form action="{{route('register')}}" method="POST">
            @csrf
            <h4 class="mb-3 text-center text-secondary">Register</h4>

            <div class="mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" value="{{old('name')}}">
              @error('name')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>

            <div class="mb-3">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter your username" value="{{old('username')}}">
              @error('username')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>

            <div class="mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter e-mail address" value="{{old('email')}}">
              @error('email')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            
            <div class="mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password" value="{{old('password')}}">
              @error('password')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>

            <div class="mb-3">
              <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Retype password" >
            </div>
              <button class="btn btn-success" type="submit">Register</button>
              <a href="{{route('login')}}" class="text-default px-3">Already registerd?</a>
          </form>
        </div>
      </div>
@endsection