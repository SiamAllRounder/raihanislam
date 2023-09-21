<header class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-5">
                <a href="{{ route('home') }}" class="logo">
                    {{-- <img src="https://mdfarukkhan.com/assets/landings/assets/images/logo.svg" alt="logo" /> --}}
                    <h1><span style="color: #09f">Raihan</span> Islam</h1>
                </a>
            </div>
            <x-responsive-menu />
            <div class="col-7 d-block d-lg-none text-right">
                <div class="apoinment">
                    <a class="appointment-btn" data-bs-toggle="modal" href="#contactForm">
                        Appointment
                    </a>
                    <ul class="menu-trigger">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>