@extends('layouts.main')

@section('container')
    <h1 class="mb-5">post categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="/img/1.jpg" class="card-img" alt="{{ $category->name }}" height="400"
                                style="object-fit: cover">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title flex-fill fs-3 p-4 text-center"
                                    style="background-color: rgba(0, 0, 0, 0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection
