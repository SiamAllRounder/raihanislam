@if (Auth::check())
<header style="position: fixed;z-index:999999" class="d-flex justify-content-center container-fluid bg-dark py-1">
    <nav class="text-white">
        <a class="text-white" href="{{ route('dashboard') }}">Dashboard</a>


    </nav>

</header>
@endif