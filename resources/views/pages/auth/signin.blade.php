<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini Signin Page</title>
</head>
<body>
    Ini adalah Page Sign In
</body>

@extends('layouts.main')
@section('title', 'Sign up')
@section('content') 
<div class="container">

  @if ($errors->any())
  <div class="row mb-2">
      <div class="col">
          <div class="alert alert-danger" role="alert">
              <strong>
                  PERHATIAN
              </strong>
              <br />
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      </div>
  </div>
@endif
<form action="{{route('auth.authenticate')}}" method="POST">
  @csrf
  
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
     
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




</html>