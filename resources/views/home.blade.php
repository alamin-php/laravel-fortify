@extends('layouts.auth.app')

@section('content')
  <h1 class="text-center mt-5">Welcome, Fortify Dashboard!</h1>
  <h4 class="text-center mt-5">Hello, {{Str::ucfirst(Auth::user()->username)}}</h4>
@endsection