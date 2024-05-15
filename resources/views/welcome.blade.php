@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Home Page</h1>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Comics Manager page</a>
    </div>
    <div class="container">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="">

                        <div class="card-body">
                            <h3 class="card-title">{{ $comic['title'] }}</h3>
                            <p><strong>Price: </strong>{{ $comic['price'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
