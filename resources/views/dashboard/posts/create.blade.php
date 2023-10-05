@extends('dashboard.layouts.main')

@section('container')
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Create Data Blog</h4>
        <p class="card-category">Publish your passions your way. Whether you'd like to share your knowledge, experiences or the latest news, create a unique and beautiful blog. </p>
    </div>
    <div class="card-body">
        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title" class="bmd-label-floating">Title</label>
                        <input type="text" class="form-control @error('title')is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug" class="bmd-label-floating">Slug</label>
                        <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                        @error('slug')
                        <small class="invalid-feedback">
                            {{ $message }}
                        </small>
                    @enderror   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-preview img-fluid mb-3 col-sm-7" alt="" >
                    <div class="input-group mb-2 mt-3">
                        <input type="file" class="form-control @error('image')is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                        @error('image')
                            <small class="invalid-feedback">
                                {{ $message }}
                            </small>
                        @enderror  
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Category </label>
                        <select class="selectpicker btn btn-primary pull-right dropdown-toggle" data-toggle="dropdown" name="category_id" aria-haspopup="true" aria-expanded="false"> --
                        @foreach ($categories as $category)
                            @if(old('category_id') == $category->id)
                                <option title="Combo 1" class="text-left" value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option title="Combo 1" class="text-left" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group text-white">
                        <label class="bmd-label-floating">Slug</label>
                        <input id="x" type="hidden" name="body" class="bg-light" value="{{ old('body') }}">
                        <trix-editor input="x" class="bg-dark text-white">

                        </trix-editor>
                        @error('body')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right mt-5">Create Blog   </button>
            <div class="clearfix"></div>
        </form>
      </div>
    <div class="card-footer">
        <div class="stats">
            <i class="material-icons">access_time</i> Last Login Time : {{ Auth::user()->last_login_time }}
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', ()=> {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgpreview = document.querySelector('.img-preview');

            imgpreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = (oFREvent) => {
                imgpreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

