@extends('layouts.admin')
@section('content')

        <section class="w-full md:w-2/3 flex flex-col items-center px-3 ml-96 pl-44">
            <article class="flex flex-col shadow my-4">
            <a class="hover:opacity-75">
        <img src="{{ asset('fotopost/'.$post->foto) }}">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <a class="text-blue-700 text-sm font-bold uppercase pb-4"> KATEGORI </a>
        <a class="text-3xl font-bold hover:text-gray-700 pb-4"> {{ $post->judul }} </a>
        <p class="text-sm pb-3">
            By <a class="font-semibold hover:text-gray-800">DaffaPark_</a>, Published on {{ date('Y-m-d', strtotime($post->created_at)) }}
        </p>
        <div class="pb-6">{{ $post->body }}</div>
    </div>  
            </article>           
</section>

@endsection