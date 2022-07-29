@extends('layouts.auth.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 product-form my-3 py-3">
          <form action="{{route('password.confirm')}}" method="POST">
            @csrf
            <h4 class="mb-3 text-center text-secondary">Password Reset</h4>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter e-mail address" value="{{old('email')}}">
              @error('email')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            
              <button class="btn btn-success" type="submit">Reset Password</button>
          </form>
        </div>
      </div>
@endsection