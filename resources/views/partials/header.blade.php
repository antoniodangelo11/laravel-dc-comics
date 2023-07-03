<header>
    <div class="container">
        <h1 class="text-center text-danger fw-bold">Laravel Comics</h1>
        @if (session('delete_success'))
            <div class="alert alert-danger">
                {{ session('delete_success') }}
            </div>
        @endif
    </div>
</header>
