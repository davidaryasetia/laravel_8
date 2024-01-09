@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-my-8">
            <h2 class="mb-3"> {{$post->title}} </h2>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to My Post</a>
            <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            <a href="" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a>
            <img src="https://source.unsplash.com/random/640×320?{{$post->category->name}}" class="card-img-top mt-3" alt="{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </article>
        <a href="/posts" class="d-block mt-4">Back To Blog</a>
        </div>
    </div>
</div>


@endsection
