@extends('layouts.main')

@section('judul')
  <article>
    <h2>{{ $post->title }}</h2>

    <p>By.<a href="#" class="text-decoration-none">{{ $post->user->name }}</a> | <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
  </article>

  <a href="/posts" class="d-block mt-5">Back to Posts</a>
@endsection