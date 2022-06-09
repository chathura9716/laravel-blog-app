@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Blog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Title</label>
                            <input  name="title" type="text" class="form-control"  placeholder="Enter post title" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"  class="form-control"   placeholder="Enter post description" rows="10" required ></textarea >
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="thumbnail" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
