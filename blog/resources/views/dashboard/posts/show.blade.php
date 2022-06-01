@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>{{ $post->title }}</h2>
        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        <article class="my-3 fs-6">
         
          {!! $post->body !!}
        </article>
      
        <a href="/dashboard/posts" class="d-block mt-5">Back to dashboard</a>
  
      </div>
    </div>
  </div>
  
@endsection