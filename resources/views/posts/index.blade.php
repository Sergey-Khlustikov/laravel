@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('posts.create')}}" class="btn btn-success mb-3">Create</a>

        <div class="row gy-4">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        @if($post->path)
                            <img src="{{$post->path}}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{route('posts.show', $post->id)}}" class="card-link">Full</a>
                                <a href="{{route('posts.edit', $post->id)}}" class="card-link">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
