@extends('layouts.base')

@section('contents')
    <h1 class="text-center text-light">Laravel Comics</h1>
    <div class="d-flex flex-column">
        <div id="loader">
            <div class="ls-particles ls-part-1"></div>
            <div class="ls-particles ls-part-2"></div>
            <div class="ls-particles ls-part-3"></div>
            <div class="ls-particles ls-part-4"></div>
            <div class="ls-particles ls-part-5"></div>
            <div class="lightsaber ls-left ls-green"></div>
            <div class="lightsaber ls-right ls-red"></div>
        </div>
        <div class="bat-btn">
            <button>
                <span><a href="{{ route('comics.index') }}">ARCHIVE COMICS
                </a></span>
            </button>
        </div>
    </div>
@endsection
