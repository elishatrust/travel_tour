<div class="container-fluid include-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">{{ $page_title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white fw-bold" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="breadcrumb-item text-dark fw-bold active" aria-current="page">
                    {{ $page_title }}
                </li>
            </ol>
        </nav>
    </div>
</div>