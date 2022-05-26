@extends('layouts.main')
@section('judul')
    @foreach ($categories as $category)


    <ul>
        <li>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
    </ul>

      {{-- <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
      </h2> --}}

    
    @endforeach
@endsection