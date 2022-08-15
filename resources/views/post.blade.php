@extends('layouts.main')


@section('container')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="mb-4">
        <h1>{{ $post->title }}</h1>
        <p>
          By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
          <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
      </div>
      {!! $post->body !!}
      <p class="mt-3"><a href="/posts">Back to Posts</a></p>
    </div>
  </div>
</div>
@endsection
