@extends('layouts.main')

@section('container')
<article class="mt-4">
    <h2 class="mb-4">Post Categories</h2>
    @foreach ($category as $cat)
        <div class="border mb-4 p-3">
            <h3>
                <a href="/categories/{{ $cat->slug }}" class="text-decoration-none">{{ $cat->name }}</a>
            </h3>
        </div>
    @endforeach
</article>

@endsection