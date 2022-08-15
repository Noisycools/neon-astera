@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <div class="mb-4">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back to My Posts</a>
        <a href="" class="btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>
        <a href="" class="btn btn-danger mb-3"><span data-feather="x-circle"></span> Delete</a>

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
      </div>
      {!! $post->body !!}
      <p class="mt-3"><a href="/posts">Back to Posts</a></p>
    </div>
  </div>
</div>

@endsection
