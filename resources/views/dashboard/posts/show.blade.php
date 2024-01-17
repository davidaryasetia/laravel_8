@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-my-8">
            <h2 class="mb-3"> {{$post->title}} </h2>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to My Post</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure')"><i class="bi bi-trash"> Delete</i></button>
            </form>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
            <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/random/640×320?{{$post->category->name}}" class="card-img-top mt-3" alt="{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </article>
        <a href="/posts" class="d-block mt-4">Back To Blog</a>
        </div>
    </div>
</div>


@endsection

