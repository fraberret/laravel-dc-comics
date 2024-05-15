@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection
