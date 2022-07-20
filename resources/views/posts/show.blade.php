@extends('layouts.posts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex ">
                    <img src="{{ asset('fotopost/'.$post->foto) }}" width="150px" class="rounded-circle" alt="Cinque Terre">
                    </div>
                    <h2 class="d-flex justify-content-center">{{$post->title}}</h2>
                    <br>
                    <div class="d-flex justify-content-center">
                        {{$post->body}}
                    </div>
                    <br>
                    <p class="d-flex justify-content-center">Published At: {{date('Y-m-d', strtotime($post->published_at))}}</p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection