@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    Hello {{auth()->user()->name}}...!!!<br>
                    Your email : {{auth()->user()->email}}
                <div>
                    <a href="{{Route('user.edit',auth()->user()->id)}}" class="btn btn-sm btn-primary">Edit</a>
                </div>
                </div>
             

            </div>
        </div>
    </div>
</div>
@endsection