
{{--
    To Do
    1. If name equal to abu, i want to display. You are banned --}}
    @php
    $_name =$name ?? "team" ;
    @endphp
    @extends('layouts.main')
    @section ('content')
        @php($_name=$name ??"team")
        @if($_name=="abu")
        
    <p>You are banned</p>
    @else
  <h1> Hello, {{$_name  }}</h1> 
    @endif

    <button type="button" class="btn btn-info">Save</button>

@endsection
