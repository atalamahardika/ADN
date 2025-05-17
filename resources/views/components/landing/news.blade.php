<div class="news-section">
    <div class="container my-5">
        <h2 class="text-center mb-4">Portal Berita</h2>

        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($beritas as $berita)
                <div class="card h-100 shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('/' . $berita->gambar) }}" class="card-img-top" alt="Thumbnail {{ $berita->judul }}">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title" style="height: 100px">{{ $berita->judul }}</h6>
                        <a href="{{ route('news.show-detail', $berita->slug) }}" class="btn btn-success btn-sm mt-auto">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/berita') }}" class="btn btn-outline-success btn-sm">
                Memuat lebih banyak
            </a>
        </div>
    </div>
</div>
