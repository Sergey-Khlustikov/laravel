@extends('layouts.app')

@section('content')
    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id], 'files' => true]) !!}

    <div class="mb-3">
        {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
        {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
        {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('file', 'File', ['class' => 'form-label']) !!}
        {!! Form::file('file', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary mb-3']) !!}
    </div>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::close() !!}
@endsection
