@extends('layouts.base')

@section('contents')
    <div class="row g-3 row-cols-3">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card h-100" style="">
                    <img src={{$comic->thumb}} class=" image-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection