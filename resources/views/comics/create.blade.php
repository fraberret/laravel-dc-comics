@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Add a new comic</h1>

        @include('partials.validation-errors')
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="" value="{{ old('title') }}" />
                <small id="titleHelper" class="form-text text-muted">Type a comic title</small>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror


            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3" placeholder="Description" value="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="thumbHelper" placeholder="" value="{{ old('thumb') }}" />
                <small id="thumbHelper" class="form-text text-muted">Type a comic title</small>
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="priceHelper" placeholder="" value="{{ old('price') }}" />
                <small id="priceHelper" class="form-text text-muted">Type a comic price</small>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="seriesHelper" placeholder="" value="{{ old('series') }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a comic series</small>
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="sale_dateHelper" placeholder="" value="{{ old('sale_date') }}" />
                <small id="sale_dateHelper" class="form-text text-muted">Type a comic Sale date</small>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="typeHelper" placeholder="" value="{{ old('type') }}" />
                <small id="typeHelper" class="form-text text-muted">Type a comic type</small>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <a class="btn btn-primary" href="{{ route('comics.index') }}"><i class="fa fa-arrow-circle-left"
                    aria-hidden="true"></i> Previous</a>
            <button type="submit" class="btn btn-primary">
                Create
            </button>



        </form>
    </div>
@endsection
