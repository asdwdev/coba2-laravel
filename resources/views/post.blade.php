@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/authors/{{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}</a></p>

                <img src="/img/hero.jpg" alt="{{ $post->category->name }}" width="1200" height="400" class="img-fluid">

                <article class="fs-5 my-3">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">back to posts</a>
            </div>
        </div>
    </div>
@endsection
