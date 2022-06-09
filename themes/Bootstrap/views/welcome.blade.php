@extends('layouts.admin')
@section('content')

>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      @foreach ($latest_posts as $latest)
        <div class="col-md-6 px-0">
        
          <h2 class="display-5 font-italic">{{$latest->title}}</h2>
          <div class="mb-1 text-muted">{{$latest->user->name}} {{ date('Y-m-d',strtotime($latest->created_at))}}</div>
          <p class="lead my-3">{{$latest->description}}</p>
          <p class="lead mb-0"><a href="{{route('posts.show',$latest->id)}}" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
        @endforeach
      </div>
    
      <div class="row mb-2 mt-2">
    
          @foreach ($posts as $post)
          

          <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow ">
            
              <div class="card-body d-flex flex-column align-items-start">
              <img src="{{asset('thumbnails/'.$post->thumbnail)}}" class="img-thumbnail" alt="Thumbnail" >
                <h3 class="mb-0 mt-2">
                  <a class="text-dark" href="#">{{$post->title}}</a>
                </h3>
                <div class="mb-1 text-muted">{{$post->user->name}} {{ date('Y-m-d',strtotime($post->created_at))}}</div>
                <p class="card-text mb-auto">{{$post->description}}</p>
                <a href="{{route('posts.show',$post->id)}}">Continue reading</a>
              </div>
            
            </div>
          </div>
          @endforeach
      </div>
      

@endsection