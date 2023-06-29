@extends('layouts.base')

@section('contents')
    <div class="row g-3 row-cols-3">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card h-100" style="">
                    <img src={{ $comic->thumb }} class=" image-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $comic->price }} €</li>
                        <li class="list-group-item">{{ $comic->series }}</li>
                        <li class="list-group-item">{{ $comic->sale_date }}</li>
                        <li class="list-group-item">{{ $comic->type }}</li>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Comic Description</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection