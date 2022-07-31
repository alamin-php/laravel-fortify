@extends('layouts.auth.app')

@section('content')
  <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-8 product-form my-3 py-3">
          <form action="{{route('students.update', $data->id)}}" method="post">
            @method("PUT")
            @csrf
            <h4 class="mb-3 text-center text-secondary">Update Student Data</h4>
            @if(session()->has('success'))
                <p class="text-success pb-3">{{session()->get('success')}}</p>
            @endif
            <div class="mb-3">
              <select name="class_id" id="class_id" class="form-control @error('class_id') is-invalid @enderror">
                @foreach($class as $key=>$row)
                <option value="{{$row->id}}" <?php if($row->id == $data->class_id){echo 'selected';} ?>>{{$row->class_name}}</option>
                @endforeach
              </select>
              @error('class_id')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            <div class="mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter student name" value="{{$data->name}}">
              @error('name')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            <div class="mb-3">
              <input type="text" name="roll" class="form-control @error('roll') is-invalid @enderror" id="roll" placeholder="Enter student roll" value="{{$data->roll}}">
              @error('roll')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            <div class="mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter student email" value="{{$data->email}}">
              @error('email')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            <div class="mb-3">
              <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter student phone" value="{{$data->phone}}">
              @error('phone')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
            <div class="mb-3">
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter student address" value="{{$data->address}}">
              @error('address')
              <strong class="text-danger">{{$message}}</strong>
              @enderror
            </div>
        
              <button class="btn btn-success" type="submit">Update</button>
          </form>
        </div>
      </div>
@endsection