@extends('layouts.base')

@section('contents')
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
            <button class="bat_button">
                <span><a href="{{ route('comics.index') }}">ARCHIVE COMICS
                </a></span>
            </button>
        </div>
        <div class="ins_btn">
            <button class="ins_button">
                <a href="{{ route('comics.create') }}">INSERT NEW COMIC</a>
            </button>
        </div>
        <div class="btn">
            <button class="button">
                <a href="{{ route('comics.trashed') }}">COMICS BIN</a>
            </button>
        </div>
    </div>
@endsection
