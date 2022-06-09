@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Blog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('posts.update',$post->id)}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Title</label>
                            <input  name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter post title" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"  class="form-control" id="exampleInputPassword1"  placeholder="Enter post description" rows="10" required ></textarea >
                        </div>
                   
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection