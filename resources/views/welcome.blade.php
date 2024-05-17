@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-between align-items-center my-4">
        <h1>Dc Comics</h1>
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Comics Manager page</a>
    </div>
    <div class="container py-4">
        <div class="row g-4">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="thumb_container">
                        <img src="{{ $comic['thumb'] }}" alt="">

                        <div class=" py-4 text-center">
                            <h3 class="card-title">{{ $comic['title'] }}</h3>
                            <p><strong>Price: </strong>{{ $comic['price'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
