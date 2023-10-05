@extends('layouts.main')

@section('container')
<section class="section mt-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class=" col-lg-9 mb-5 mb-lg-0">
          <article>
            <div class="post-slider mb-4">
              <img src="{{ asset('storage/' . $posts->image) }}" class="card-img" alt="post-thumb">
            </div>
            
            <h1 class="h2">{{ $posts->title }}</h1>
            <ul class="card-meta my-3 list-inline">
              <li class="list-inline-item">
                <a href="author-single.html" class="card-meta-author">
                  <img src="images/john-doe.jpg">
                  <span>{{ $posts->user->name }}</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="/categories/{{ $posts->category->slug }}" class="card-meta-author">
                  <img src="images/john-doe.jpg">
                  <span>{{ $posts->category->name }}</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>{{ $posts->updated_at }}
              </li>
            </ul>
            <div class="content mb-5">
                <h5>{{ $posts->excerpt }}</h5>
            </div>
            <div class="content">
                {!! $posts->body !!}
            </div>
          </article>
          <a href="/blog" class="btn btn-outline-primary btn-lg float-right mt-5">Kembali</a>
        </div>
        
      </div>
    </div>
  </section>
{{-- <article>
    <h2 class="mb-3">{{ $posts->title }}</h2>
    <p>Author : <a href="/authors/{{ $posts->user->username }}" class="text-decoration-none">{{ $posts->user->name }}</a> --- <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p>

    <h5 class="mb-4">{{ $posts->excerpt }}</h5>
    {!! $posts->body !!}
    <a href="/blog" class="btn btn-primary mb-3">Kembali</a>
</article> --}}
@endsection
