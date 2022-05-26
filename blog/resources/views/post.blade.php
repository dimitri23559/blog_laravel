@extends('layouts.main')

@section('judul')
  <article>
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
  </article>

  <a href="/posts">Back to Posts</a>
@endsection