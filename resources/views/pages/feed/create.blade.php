@extends('layouts.main')
@section('title','Feed create')
@section('content')


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

  <form action="{{route('feed.store')}}" method="POST">



    @csrf
  

    <div class ="mb=3">
      </div>
          <h1>Feed  create</h1>
        <dir class ="container">
          <div class="mb-3">
            <label for="title" class="form-label">TITLE</label>
            <input type="text" name="title" class="form-control"  required >
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>


  </form>
  </dir>


 


@endsection
