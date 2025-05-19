<style>
    /* Fill the tabs equally */
    .custom-tabs .nav-item {
        margin-bottom: -1px;
    }

    .custom-tabs .nav-link {
        width: 100%;
        border: none;
        border-bottom: 3px solid transparent;
        font-weight: bold;
        color: #000;
        background-color: transparent;
    }

    .custom-tabs .nav-link.active {
        border-bottom: 3px solid #28a745;
        /* hijau */
        color: #28a745;
        background-color: transparent;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        transition: 0.3s;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        border-color: #2e7d32;
    }

    .card {
        border-radius: 10px;
    }
</style>



<div class="container my-5">
    <h1 class="text-center mb-4">Publikasi</h1>

    <ul class="nav nav-tabs custom-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item flex-fill text-center" role="presentation">
            <button class="nav-link active" id="adn-tab" data-bs-toggle="tab" data-bs-target="#adn" type="button"
                role="tab">
                Publikasi ADN
            </button>
        </li>
        <li class="nav-item flex-fill text-center" role="presentation">
            <button class="nav-link" id="mandiri-tab" data-bs-toggle="tab" data-bs-target="#mandiri" type="button"
                role="tab">
                Publikasi Mandiri
            </button>
        </li>
    </ul>

    <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="adn" role="tabpanel">
            <div class="container my-5">
                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <a href="publikasi/jurnal/sosial-humaniora" class="text-decoration-none">
                            <div class="card h-100 shadow-sm hover-card">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark">Jurnal Riset Sosial Humaniora</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <a href="publikasi/jurnal/sains-teknologi" class="text-decoration-none">
                            <div class="card h-100 shadow-sm hover-card">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark">Jurnal Riset Sains dan Teknologi</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <a href="publikasi/jurnal/pengabdian-masyarakat" class="text-decoration-none">
                            <div class="card h-100 shadow-sm hover-card">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-dark">Jurnal Pengabdian Masyarakat Dharma Nasional</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="mandiri" role="tabpanel">
            <h4 class="text-center">List Jurnal</h4>

            @if ($mandiri->count())
                @foreach ($mandiri as $item)
                    <div class="mb-4 p-3 border rounded shadow-sm">
                        <h5 class="mb-2">{{ $item->judul }}</h5>

                        <p class="mb-1">
                            {{ $item->peneliti }} ({{ $item->tahun }}). '{{ $item->judul }}',
                            <em>{{ $item->nama_jurnal }}</em>, {{ $item->volume }}({{ $item->nomor }}),
                            {{ $item->halaman }}.
                        </p>

                        @if ($item->link)
                            <a href="{{ $item->link }}" target="_blank">Lihat Jurnal</a>
                        @endif
                    </div>
                @endforeach

                <div class="d-flex justify-content-center mt-4">
                    {{ $mandiri->appends(['tab' => 'mandiri'])->links('vendor.pagination.bootstrap-5-custom') }}
                </div>
            @else
                <p class="text-center mt-4">Belum ada publikasi mandiri.</p>
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const activeTab = urlParams.get('tab');

            // Handle active tab on reload
            if (activeTab === 'mandiri') {
                const tabMandiri = document.querySelector('#mandiri-tab');
                const contentMandiri = document.querySelector('#mandiri');
                const tabAdn = document.querySelector('#adn-tab');
                const contentAdn = document.querySelector('#adn');

                tabAdn.classList.remove('active');
                contentAdn.classList.remove('show', 'active');
                tabMandiri.classList.add('active');
                contentMandiri.classList.add('show', 'active');
            }

            // Reset to page 1 when switching tabs
            document.querySelector('#mandiri-tab').addEventListener('click', function() {
                const url = new URL(window.location.href);
                url.searchParams.set('tab', 'mandiri');
                url.searchParams.delete('page'); // reset page
                window.location.href = url.toString(); // trigger reload, bukan hanya ganti URL
            });


            document.querySelector('#adn-tab').addEventListener('click', function() {
                const url = new URL(window.location.href);
                url.searchParams.delete('tab');
                url.searchParams.delete('page');
                window.location.href = url.toString(); // trigger reload
            });

        });
    </script>
@endpush
