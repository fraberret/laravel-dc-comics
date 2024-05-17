@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Edit selected comic</h1>
        @include('partials.validation-errors')
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="" value="{{ old('title', $comic->title) }}" />
                <small id="titleHelper" class="form-text text-muted">Type a comic title</small>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $comic->description) }}/></textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="" value="{{ old('thumb', $comic->thumb) }}" />
                <small id="thumbHelper" class="form-text text-muted">Type a comic title</small>
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="" value="{{ old('price', $comic->price) }}" />
                <small id="priceHelper" class="form-text text-muted">Type a comic price</small>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="" value="{{ old('series', $comic->series) }}" />
                <small id="seriesHelper" class="form-text text-muted">Type a comic series</small>
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="" value="{{ old('sale_date', $comic->sale_date) }}" />
                <small id="sale_dateHelper" class="form-text text-muted">Type a comic Sale date</small>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="" value="{{ old('type', $comic->type) }}" />
                <small id="typeHelper" class="form-text text-muted">Type a comic type</small>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <a class="btn btn-primary" href="{{ route('comics.index') }}"><i class="fa fa-arrow-circle-left"
                    aria-hidden="true"></i> Previous</a>

            <button type="submit" class="btn btn-primary">
                Edit
            </button>



        </form>
    </div>
@endsection
