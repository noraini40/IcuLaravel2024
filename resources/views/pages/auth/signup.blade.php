@extends('layouts.main')
@section('title', 'Sign up')
@section('content') 
<div class="container">

  

  <form action="{{route('auth.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input type="text" class="form-control" id="name" name="name">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email address</label>
     
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>









@endsection