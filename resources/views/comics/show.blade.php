@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <h2>{{ $comic->title }}</h2>
                <p>{{ $comic->description }}</p>
                <a class="btn btn-primary" href="{{ route('comics.index') }}"><i class="fa fa-arrow-circle-left"
                        aria-hidden="true"></i> Previous</a>
                <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Modify</a>
                <button type="button" class="btn btn-danger btn-m" data-bs-toggle="modal"
                    data-bs-target="#modalId-{{ $comic->id }}">
                    Delete</i>
                </button>
            </div>


            <!-- Modal trigger button -->


            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $comic->id }}"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                Attention| Deleting: {{ $comic->title }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">You are about to delete this</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Confirm
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
