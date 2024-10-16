@extends('layouts.main')
@section('title','Feed list')
@section('content')
  <form action="{{route('feed.update',$feed->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class ="mb=3">
      </div>
          <h1>Feed  Listing</h1>
        <dir class ="container">
          <div class="mb-3">
            <label for="title" class="form-label">TITLE</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $feed->title)}}" required >
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description',
            $feed->description)}}

            </textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>


  </form>
  </dir>


 


@endsection