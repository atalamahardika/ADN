<style>
    .news-card {
        transition: transform 0.2s ease;
    }

    .news-card:hover {
        transform: scale(1.01);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        border-color: #2e7d32;
    }

    .img-wrapper {
        position: relative;
        width: 100%;
        padding-top: 66.66%; /* 3:2 aspect ratio */
        overflow: hidden;
    }

    .img-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

@props(['title', 'image', 'link'])

<a href="{{ $link }}" class="text-decoration-none text-dark">
    <div class="card mb-3 shadow-sm news-card overflow-hidden">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="img-wrapper">
                    <img src="{{ asset($image) }}" alt="{{ $title }}">
                </div>
            </div>
            <div class="col-md-8 d-flex align-items-center p-3">
                <h6 class="mb-0 fw-semibold">{{ $title }}</h6>
            </div>
        </div>
    </div>
</a>
