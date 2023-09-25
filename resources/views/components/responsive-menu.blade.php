<div class="col-lg-9 responsive-menu">
    <ul class="mainmenu d-flex align-items-center justify-content-end">
        <li>
            <a class="active" href="{{ route('home') }}">{{ $home }}</a>
        </li>
        <li>
            <a class="" href="{{ route('about') }}">{{ $about }}</a>
        </li>
        <li>
            <a class="" href="{{ route('seo-course') }}">{{ $seo }}</a>
        </li>
        <li>
            <a href="{{ route('blog') }}">{{ $blog }}</a>
        </li>
        <li>
            <a class="" href="{{ route('contact') }}">{{ $contact }}</a>
        </li>
        <li class="d-none d-lg-block">
            <a class="appointment-btn" data-bs-toggle="modal" href="#contactForm">
                {{ $appointment }}</a>
        </li>
    </ul>
</div>