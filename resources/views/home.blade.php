@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
        	
        <div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>image</th>
                            <th>Published At</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><img src="{{ asset('fotopost/'.$post->foto) }}" width="40px"></td>
                            <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                            <td>
                            <a href="posts/{{$post->id}}" class="btn btn-primary">Show</a>
                            <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="posts/{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection