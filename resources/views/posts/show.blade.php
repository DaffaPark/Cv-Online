@extends('layouts.posts')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Post') }}</div>

                <div class="card-body border-bottom">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="d-flex ">
                    <img src="{{ asset('fotopost/'.$post->foto) }}" class="rounded" width="150px" alt="Cinque Terre">
                    </div>
                    <h2 class="d-flex justify-content-center">{{$post->title}}</h2>
                    <br>
                    <div class="d-flex justify-content-center text-break">
                        {{!! $post->body !!}}
                    </div>
                    <br>                
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection