@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header" style="text-align: center;">Featured</h5>
            <div class="card-body">
                {{-- {{$data}} --}}
              @foreach ($data as $post)
              <div>
                <h5 class="card-title">{{$post->name}}</h5>
                <p class="card-text">{{$post->description}}</p>
                <a href="#" class="btn btn-primary">View</a>
              </div> <hr>
              @endforeach
            </div>
          </div>
    </div>
@endsection