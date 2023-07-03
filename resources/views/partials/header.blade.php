<header>
    <div class="container">
        <h1 class="text-center text-danger fw-bold">Laravel Comics</h1>
        
        @if (session('delete_success'))
            @php $comic = session('delete_success') @endphp
            <div class="alert alert-danger">
                Comic '{{ $comic->title }}' has been deleted
                <form action="{{ route("comics.restore", ['comic' => $comic]) }}" method="POST">
                    @csrf
                    <button class="btn btn-warning">Restore</button>
                </form>
            </div>
        @endif

        @if (session('restore_success'))
            @php $comic = session('restore_success') @endphp
            <div class="alert alert-success">
                Comic '{{ $comic->title }}' has been restored
                <form action="{{ route("comics.restore", ['comic' => $comic]) }}" method="POST">
                    @csrf
                    <button class="btn btn-warning">Restore</button>
                </form>
            </div>
        @endif
    </div>
</header>
