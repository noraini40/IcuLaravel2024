@extends('layouts.main')
@section('title','Feed list')
@section('content')
    <h1>Feed  Listing</h1>
   
  <div class="container">
    @if (session('success'))

<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
    {{session('sucess')}}
  <strong>Berjaya!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     @endif   
    
  


    


  <h1>Feed List</h1>

<a
type="button"
class="btn-primary mb3"
href="{{route('feed.create')}}"
>
New Feed
  </a>

  
  
    @foreach ($feeds as $feed ) 
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$feed->title}}</h5>
          
          <p class="card-text">{{$feed->description}}</p>
         
        </div>
      </div>


    
    
          @endforeach
    
      <div class="d-flex justify-content-start">
        {{$feeds->links()}}
      </div>
  <div 

  </dir>
@endsection