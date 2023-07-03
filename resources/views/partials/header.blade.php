<header>
    <div class="container">
        <h1 class="text-center text-danger fw-bold">Laravel Comics</h1>
        
        <nav>
            <div class="flex">
                <a class="btn btn-warning" href="{{ route('comics.trashed') }}">COMICS BIN</a>
                <a class="btn btn-success" href="{{ route('comics.index') }}">Archive Comics</a>
                <a class="btn btn-danger" href="{{ route('comics.create') }}">INSERT NEW COMIC</a>
            </div>
        </nav>
    </div>
</header>
