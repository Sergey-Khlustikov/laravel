@extends('layouts.app')

@section('content')
    <div class="title m-b-md">Contact</div>

    @if(count($people))
        <ul class="list">
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
@endsection
