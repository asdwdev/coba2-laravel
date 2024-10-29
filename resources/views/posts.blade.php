@extends('layouts.main')

@section('container')
    <h1 class="mb-5">halaman blog posts</h1>

    @foreach ($posts as $post)
        <article class="border-bottom mb-5 pb-4">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>

            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection
