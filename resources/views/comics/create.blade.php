@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a new comic</h1>
        <form action="{{ route('comics.create') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="" />
                <small id="titleHelper" class="form-text text-muted">Type a comic title</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">Description</textarea>
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="" />
                <small id="thumbHelper" class="form-text text-muted">Type a comic title</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="" />
                <small id="priceHelper" class="form-text text-muted">Type a comic price</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="" />
                <small id="seriesHelper" class="form-text text-muted">Type a comic series</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="" />
                <small id="sale_dateHelper" class="form-text text-muted">Type a comic Sale date</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="" />
                <small id="typeHelper" class="form-text text-muted">Type a comic type</small>
            </div>


        </form>
    </div>
@endsection
