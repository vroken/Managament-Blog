<style>
    .mobile-block {
    display: block; /* Default display is block */
}

/* Change display to inline for small screens (mobile) */
@media (max-width: 767px) {
    .mobile-block {
        display: inline; /* Change to inline on small screens */
    }
}
</style>

@extends('layouts.main')

@section('container')
    {{-- Info Category --}}
    <div class="banner text-center mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1 class="mb-5">What Would You <br> Like To Read Today?</h1>
                    <ul class="list-inline widget-list-inline">
                        @foreach ($blogs as $blog)
                            @if ($blog->category)
                                <li class="list-inline-item"><a href="/blog?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></li>
                            @else
                                <li class="list-inline-item">No Category Right Now</li>
                            @endif
                        @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>

        <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
                stroke-miterlimit="10" />
            <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
            <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
                stroke-miterlimit="10" />
        </svg>
        
        <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d)">
            <path class="path"
            d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
            <path
            d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
            stroke="#040306" stroke-miterlimit="10" />
        </g>
        <defs>
            <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
            <feOffset dy="4" />
            <feGaussianBlur stdDeviation="2" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
            </filter>
        </defs>
        </svg>
    
        
        <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
            stroke-miterlimit="10" />
        <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
        <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
            stroke-miterlimit="10" />
        </svg>
    
        
        <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
            stroke-width="2" />
        </svg>
    </div>
    {{-- End Info Category --}}

    <article class="mt-4">
        <div class="navbar navbar-light justify-content-between mb-4">
            <h2 class="h5 section-title">{{ $title }}</h2>
            <form class="form-inline d-inline">
                
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('authors'))
                    <input type="hidden" name="authors" value="{{ request('authors') }}">
                @endif
                <div class="input-group">

                    <input id="search-query" class="form-control" name="search" type="search" placeholder="Search Here" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary mobile-block" type="submit">
                        Search
                    </button>
                </div>
                
            </form>
        </div>

        @if ($blogs->count())
            <div class="card-body border">
                <h3 class="mb-3">
                    <a class="post-title" href="/blog/{{ $blogs[0]->slug }}">{{ $blogs[0]->title }}</a>
                </h3>
                @if ($blogs[0]->image)
                    <img src="{{ asset('storage/' . $blogs[0]->image) }}" class="card-img-top" alt="{{ $blogs[0]->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                @else
                    @if ($blogs[0]->category)
                        <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="{{ $blogs[0]->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                    @else
                        <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="" style="width: fill; height: 300px; object-fit: cover;">
                    @endif
                @endif
                <ul class="card-meta list-inline mt-3">
                    <li class="list-inline-item">
                        <a href="/blog?authors={{ $blogs[0]->user->username }}" class="card-meta-author">
                            <img src="img/irwan.png" >
                            <span>{{ $blogs[0]->user->name }}</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-calendar"></i>
                        <a href="/blog?category={{ $blogs[0]->category->slug }}">{{ $blogs[0]->category->name }}</a>
                    </li>
                    <li class="list-inline-item">
                        <i class="ti-timer"></i>{{ $blogs[0]->created_at->diffForHumans() }}
                    </li>
                </ul>
                <p>{{ $blogs[0]->excerpt }}</p>
                <a href="/blog/{{ $blogs[0]->slug }}" class="btn btn-outline-primary">Read More</a>
            </div>

            {{-- <div class="card mb-5">
                @if ($blogs[0]->image)
                    <img src="{{ asset('storage/' . $blogs[0]->image) }}" class="card-img-top" alt="{{ $blogs[0]->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                @else
                    @if ($blogs[0]->category)
                        <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="{{ $blogs[0]->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                    @else
                        <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="" style="width: fill; height: 300px; object-fit: cover;">
                    @endif
                @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/blog/{{ $blogs[0]->slug }}" class="text-decoration-none text-dark">{{ $blogs[0]->title }}</a></h3>
                    <p class="card-text">
                        <small>
                            @if ($blogs[0]->category)
                                Author : <a href="/blog?authors={{ $blogs[0]->user->username }}" class="text-decoration-none">{{ $blogs[0]->user->name }}</a> --- <a href="/blog?category={{ $blogs[0]->category->slug }}" class="text-decoration-none">{{ $blogs[0]->category->name }}</a>
                            @else
                                Author : <a href="/blog?authors={{ $blogs[0]->user->username }}" class="text-decoration-none">{{ $blogs[0]->user->name }}</a> --- <a href="/blog?category=" class="text-decoration-none">No Category</a>
                            @endif
                        </small>
                    </p>
                    <p class="card-text"><small class="text-muted ">Last updated : {{ $blogs[0]->created_at->diffForHumans() }}</small></p>
                    <p>{{ $blogs[0]->excerpt }}</p>
                    <a href="/blog/{{ $blogs[0]->slug }}" class="btn btn-primary mb-2">Read More</a>
                </div>
            </div> --}}

            {{-- <div class="container">
                <div class="row">
                    @foreach ($blogs->skip(1) as $blog)
                    <div class="col-md-4 ">
                        <div class="card-body border">
                            <h3 class="mb-3">
                                <a class="post-title" href="/blog/{{ $blogs->slug }}">{{ $blogs->title }}</a>
                            </h3>
                            @if ($blogs[0]->image)
                                <img src="{{ asset('storage/' . $blogs->image) }}" class="card-img-top" alt="{{ $blogs->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                            @else
                                @if ($blogs[0]->category)
                                    <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="{{ $blogs->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                                @else
                                    <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="" style="width: fill; height: 300px; object-fit: cover;">
                                @endif
                            @endif
                            <ul class="card-meta list-inline mt-3">
                                <li class="list-inline-item">
                                    <a href="/blog?authors={{ $blogs->user->username }}" class="card-meta-author">
                                    <img src="img/irwan.png" >
                                    <span>{{ $blogs->user->name }}</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>
                                    <a href="/blog?category={{ $blogs->category->slug }}">{{ $blogs->category->name }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>{{ $blogs->created_at->diffForHumans() }}
                                </li>
                            </ul>
                            <p>{{ $blogs->excerpt }}</p>
                            <a href="/blog/{{ $blogs->slug }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div> --}}
            
            
            <div class="container mt-5 mb-5">
                <div class="row">
                    @foreach ($blogs->skip(1) as $blog)
                    <div class="col-md-4 mb-3">
                        <div class="card-body border">
                            <h3 class="h3 section-title mb-5">
                                <a class="post-title" href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                            </h3>
                            @if ($blog->image)
                                @if ($blog->category)
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="No Name" style="width: fill; height: 300px; object-fit: cover;">
                                @endif
                            @else
                                @if ($blog->category)
                                    <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="{{ $blog->category->name }}" style="width: fill; height: 300px; object-fit: cover;">
                                @else
                                    <img src="https://source.unsplash.com/featured/" class="card-img-top" alt="" style="width: fill; height: 300px; object-fit: cover;">
                                @endif
                            @endif
                            <ul class="card-meta list-inline mt-3 d-flex justify-content-center">
                                <li class="list-inline-item">
                                    <a href="/blog?authors={{ $blogs[0]->user->username }}" class="card-meta-author">
                                    <img src="img/irwan.png" >
                                    <span>{{ $blogs[0]->user->name }}</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>
                                    @if ($blog->category)
                                        <a href="/blog?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a>
                                    @else
                                        <a href="#">No Category</a>
                                    @endif
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>Last Updated : {{ $blog->created_at->diffForHumans() }}
                                </li>
                            </ul>
                            <p>{{ $blog->excerpt }}</p>
                            <a href="/blog/{{ $blog->slug }}" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        

        {{ $blogs->links() }}
        
        @else
            @include('partials.notfound')
        @endif
    </article>

@endsection