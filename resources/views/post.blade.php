

@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3"> {{$post->title}} </h2>
                <p>by.
                    <a href="/authors/{{$post->author->username}}" class="text-decoration-none"> {{$post->author->name}}
                    </a> in <a href="/categories/{{$post->category->slug}}">
                        {{$post->category->name}}</a></p>
                <img src="https://source.unsplash.com/random/640×320?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </article>
            <a href="/posts" class="d-block mt-4">Back To Blog</a>
            </div>
        </div>
    </div>

<article>


@endsection


