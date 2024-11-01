@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                <img src="/img/hero.jpg" alt="{{ $post->category->name }}" width="1200" height="400"
                    class="img-fluid mt-3">

                <article class="fs-5 my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">back to posts</a>
            </div>
        </div>
    </div>
@endsection
