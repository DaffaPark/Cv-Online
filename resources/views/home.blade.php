@extends('layouts.admin')
@section('content')
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center">Selamat Datang!</h1>
    <p class="lead text-center">Cv-Online akan memberikan fitur yang dapat membantu anda dalam mengolah data profil menjadi Curriculum Vitae.</p>
  </div>
</div>
<br>

<section class="w-full md:w-2/3 flex flex-col items-center px-3 ml-96 pl-44 pb-12">

<article class="flex flex-col shadow my-4">
    
@foreach($posts as $post)
    <!-- Article Image -->
    <a href="show/{{$post->id}}" class="hover:opacity-75">
        <img src="{{ asset('fotopost/'.$post->foto) }}">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a href="show/{{$post->id}}" class="text-blue-700 text-sm font-bold uppercase pb-4"> KATEGORI </a>
        <a href="show/{{$post->id}}" class="text-3xl font-bold hover:text-gray-700 pb-4"> {{ $post->judul }} </a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">DaffaPark_</a>, Published on {{ date('Y-m-d', strtotime($post->created_at)) }}
        </p>
        <a href="#" class="pb-6">{{ Str::limit($post->body, 20) }}</a>
        <a href="show/{{$post->id}}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
    @endforeach
</article>
<!-- Pagination -->
<div class="flex items-center py-8 pb-44">
{{ $posts->links() }}
</div>

</section>

@endsection