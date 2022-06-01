@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Post</h1>
    </div>


    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="table-responsive">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">category</th>
              <th scope="col">aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name}}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span
                        data-feather="eye"></span></a>
                <a href="#" class="badge bg-warning"><span
                        data-feather="edit"></span></a>
                <a href="#" class="badge bg-danger"><span
                    data-feather="trash"></span></a>

                </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
@endsection