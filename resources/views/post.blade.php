

@extends('layouts.main')

@section('container')

<article>
    <h2> {{$post->title}} </h2>
    <p>by. <a href="#" class="text-decoration-none"> {{$post->user->name}} </a> in <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</p></a>
    <h5> {{$post->author}} </h5>
    {!! $post->body !!}
</article>

<a href="/posts" class="d-block mt-4">Back To Blog</a>

@endsection


