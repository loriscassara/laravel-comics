@extends('layouts.app')

{{-- Comics container --}}
@section('comicsContent')
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ $comic["thumb"] }}" alt="...">
                            <div class="card-title">
                                <h6>{{ $comic["series"] }}</h6>
                            </div>
                            <div class="card-subtitle">
                                <p class="text-end">{{ $comic["price"] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection