@extends('layouts.main')
@section('container')
  @foreach ($posts as $post)
  <h1 class="mb-5">{{$title}}</h1>
  <article class="mb-5 border-bottom pb-4">
    <h2>
      <a href="/posts/{{$post->slug}}">{{$post->title}}</a>
    </h2>
    <a href="/posts/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a>
      <p>By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></p>
    <p>{{$post->excerpt}}</p>
  </article>
  @endforeach
@endsection
