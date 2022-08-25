@extends('layouts.app')

@section('content')
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]]) !!}

    <div class="mb-3">
        {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
        {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary mb-3']) !!}
    </div>
    
    {!! Form::close() !!}
@endsection
