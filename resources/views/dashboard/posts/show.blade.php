@extends('dashboard.layouts.main')

@section('container')
    <div class="container text-white">

        <h2 class="mt-3">{{ $post->title }}</h2>
        <p>Author : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> --- 
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
        
        @if ($post->image)
            <img src="{{ asset('storage/'. $post->image) }}" class="img-holder mb-5" alt="" style="width: 100%;
            height: 300px; object-fit: cover;">
        @else
            <img src="https://source.unsplash.com/featured/" class="img-holder mb-5" alt="" style="width: 100%;
            height: 300px; object-fit: cover;">
        @endif
        <br>
        <h5 class="mb-4">{{ $post->excerpt }}</h5>
        {!! $post->body !!}
        {{-- <p>{{ $posts->body }}</p> --}}
        <a href="/dashboard/posts" class="btn btn-primary mt-3 mb-3">Kembali</a>
    </div>
@endsection