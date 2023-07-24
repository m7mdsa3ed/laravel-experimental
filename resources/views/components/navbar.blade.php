@php
    $navbarLinks = [
        "/" => "Home",
        "/posts" => "Posts",
    ];
@endphp

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-xxl">
        <a class="navbar-brand" href="#">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($navbarLinks as $link => $label)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $link }}" wire:navigate>{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
