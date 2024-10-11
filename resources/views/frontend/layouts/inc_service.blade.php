<div class="container-fluid inc_service py-5 wow123 fadeIn" data-wow123-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 h3 text-center text-white mb-3 animated slideInDown">{{ $page_title }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0" style="justify-content: center">
                <li class="breadcrumb-item">
                    <a class="text-primary fw-bold" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="breadcrumb-item text-white fw-bold active" aria-current="page">
                    {{ $page_title }}
                </li>
            </ol>
        </nav>
    </div>
</div>