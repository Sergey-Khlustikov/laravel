@extends('layouts.app')

@section('content')
    {!! Form::open(['method' => 'POST', 'action' => 'PostsController@store']) !!}

    <div class="mb-3">
        {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group mb-3">
        {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary mb-3']) !!}


        {!! Form::close() !!}

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
@endsection
