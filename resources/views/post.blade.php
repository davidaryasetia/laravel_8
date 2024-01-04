

@extends('layouts.main')

@section('container')

<article>
    <h2> {{$post->title}} </h2>
    <p>by. David Aryasetia in <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</p></a>
    <h5> {{$post->author}} </h5>
    {!! $post->body !!}
</article>

<a href="/posts">Back To Blog</a>

@endsection


