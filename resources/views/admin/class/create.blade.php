@extends('layouts.auth.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 product-form my-3 py-3">
          <form action="{{route('class.store')}}" method="POST">
            @csrf
            <h4 class="mb-3 text-center text-secondary">Create Class</h4>
            @if(session()->has('success'))
                <p class="text-success pb-3">{{session()->get('success')}}</p>
            @endif
            <div class="mb-3">
              <input type="text" name="class_name" class="form-control @error('class_name') is-invalid @enderror" id="class_name" placeholder="Enter class name" value="{{old('class_name')}}">
              @error('class_name')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
        
              <button class="btn btn-success" type="submit">Create</button>
          </form>
        </div>
      </div>
@endsection