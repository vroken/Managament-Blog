@extends('dashboard.layouts.main')

@section('container')
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Create Data Category</h4>
        <p class="card-category">Publish your passions your way. Whether you'd like to share your knowledge, experiences or the latest news, create a unique and beautiful blog. </p>
    </div>
    <div class="card-body">
        <form method="post" action="/dashboard/categories" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="bmd-label-floating">Title Category</label>
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
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
            
            <button type="submit" class="btn btn-primary pull-right mt-5">Create Category</button>
            <div class="clearfix"></div>
        </form>
      </div>
    <div class="card-footer">
        <div class="stats">
            <i class="material-icons">access_time</i> Last Login Time : {{ Auth::user()->last_login_time }}
        </div>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', ()=> {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

    </script>
@endsection

