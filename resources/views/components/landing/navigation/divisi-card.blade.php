<style>
    .divisi-card {
        border: 1.5px solid #ccc;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .divisi-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border-color: #2e7d32;
    }
</style>


@props(['title', 'region', 'link'])

<a href="{{ $link }}" class="text-decoration-none text-dark">
    <div class="card text-center shadow-sm divisi-card p-3">
        <h5 class="fw-bold">{{ $title }}</h5>
        <p class="mb-0">{{ $region }}</p>
    </div>
</a>
