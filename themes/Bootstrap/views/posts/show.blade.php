@extends('layouts.admin')
@section('content')

<div class="card text-center mt-5 mb-5">
  <div class="card-header">
    #{{ $post->id }}
  </div>
  <img src="{{asset('thumbnails/'.$post->thumbnail)}}" class="img-thumbnail" alt="Thumbnail" >
  <div class="card-body">
    <h5 class="card-title">{{$post->tile}}</h5>
    <p class="card-text">{{$post->description}}</p>
   
  </div>
  <div class="card-footer text-muted">
  {{ date('Y-m-d',strtotime($post->created_at))}}
  </div>
</div>
 
@endsection