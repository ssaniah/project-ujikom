<nav class="navbar navbar-expand-lg bg-danger navbar-dark fixed-top">
    <div class="container d-flex justify-content-between">
        <!-- Nama Aplikasi -->
        <a class="navbar-brand fw-bolder" href="#">{{ config('app.name') }}</a>

        <!-- Form Pencarian -->
        <form class="d-flex" action="{{ url('/tasks/search') }}" method="GET">
            <input class="form-control me-2" type="search" name="keyword" placeholder="Cari tugas..." value="{{ request('keyword') }}" aria-label="Search">
            <button class="btn btn-light" type="submit">Cari</button>
        </form>
    </div>
</nav>