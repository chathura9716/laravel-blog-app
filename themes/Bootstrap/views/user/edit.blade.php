@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                    <form method="post" action="{{route('user.update',$user->id)}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Name</label>
                            <input  name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter new name" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">email</label>
                            <input name="email"  class="form-control" id="exampleInputPassword1"  placeholder="Enter new email" required ></input >
                        </div>
                   
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
        
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection