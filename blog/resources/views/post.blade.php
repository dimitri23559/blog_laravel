@extends('layouts.main')

@section('judul')
  <article>
    <h2>{{ $post->title }}</h2>

    <p>by admin | <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}
  </article>

  <a href="/posts">Back to Posts</a>
@endsection