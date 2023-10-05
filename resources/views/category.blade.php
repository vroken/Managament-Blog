@extends('layouts.main')

@section('container')
    <article class="mt-4">
        <div class="navbar navbar-light justify-content-between mb-4">
        <h2 class="mb-4">Post Category: {{ $categories }}</h2>
            <form class="form-inline">
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>
        </div>

        @if ($posts->count())
            <div class="card mb-5">
                <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="{{ $posts[0]->category->name }}" style="width: fill;
                height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p class="card-text">
                        <small>  
                            Author : <a href="/authors/{{ $posts[0]->user->username }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> --- <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        </small>
                    </p>
                    <p class="card-text"><small class="text-muted ">Last updated : {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                    <p>{{ $posts[0]->excerpt }}</p>
                    <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary mb-2">Read More</a>
                </div>
                {{-- <a href=""></a> --}}
            </div>
            
            <div class="container">
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 ">
                        <div class="card mb-4">
                            <div class="position-absolute bg-dark px-3 py-2 w-100 text-center" 
                            style="background-color: rgba(0, 0, 0, 0.5); z-index: 2;">
                            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-bold" >{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="{{ $post->category->name }}" style="width: fill;
                        height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">
                                Author : <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a>
                                <p class="card-text"><small class="text-muted ">Last updated : {{ $post->created_at->diffForHumans() }}</small></p>
                                <p>{{ $post->excerpt }}</p>
                            </p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        @else
            @include('partials.notfound')
        @endif
    </article>



    {{-- <article class="mt-4 mb-4">
        <h2 class="mb-4">Post Category: {{ $categories }}</h2>
        @foreach ($posts as $post)
            <div class="border mb-2 p-3">
                <h3>
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                </h3>
                <p>{{ $post->excerpt }}</p>
            </div>
        @endforeach
    </article> --}}

@endsection