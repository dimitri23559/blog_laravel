@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">
    
    <form method="POST" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          
          </div>

          <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <select class="form-select" name="category_id">
                <option selected>Open this select menu</option>
                @foreach ($categories as $category)
                
                @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endif
                @endforeach
               
              </select>
            
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">body</label>
            <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
        @enderror
            
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


<script>
    const title = docoument.querySelector('#title');
    const slug = docoument.querySelector('#title');

    title.addEventListener('change', function{
        fetch('/dashboard/posts/checkSlug'+title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug;)
    });
</script>
@endsection