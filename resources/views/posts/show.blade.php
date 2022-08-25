@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="position-relative card-header">
                Post #{{ $post->id}}

                <div class="delete-btn">
                    {!! Form::model($post, ['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{route('posts.index')}}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-footer text-muted">
                {{$post->created_at}}
            </div>
        </div>
    </div>
@endsection

<style>
    .delete-btn {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .delete-btn form {
        margin-bottom: 0;
    }
</style>
