<style>
    .pagination .page-link {
        transition: 0.3s ease;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        margin: 0 4px;
    }

    .pagination .page-item.active .page-link {
        background-color: #2d6a4f;
        /* Warna hijau tua (cocok dengan tombol "Masuk") */
        color: #fff;
        font-weight: bold;
    }

    .pagination .page-link:hover {
        background-color: #40916c;
        color: white;
    }
</style>


@if ($paginator->hasPages())
    <nav>
        <ul class="pagination pagination-lg justify-content-center">
            {{-- Tombol Sebelumnya --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link rounded-pill">&laquo;</span></li>
            @else
                <li class="page-item"><a class="page-link rounded-pill" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            {{-- Halaman --}}
            @php
                $start = max($paginator->currentPage() - 2, 1);
                $end = min($paginator->currentPage() + 2, $paginator->lastPage());
            @endphp

            {{-- Tampilkan link ke halaman pertama --}}
            @if ($start > 1)
                <li class="page-item"><a class="page-link rounded-pill" href="{{ $paginator->url(1) }}">1</a></li>
                @if ($start > 2)
                    <li class="page-item disabled"><span class="page-link rounded-pill">...</span></li>
                @endif
            @endif

            {{-- Nomor halaman sekitar --}}
            @for ($i = $start; $i <= $end; $i++)
                @if ($i == $paginator->currentPage())
                    <li class="page-item active"><span class="page-link rounded-pill">{{ $i }}</span></li>
                @else
                    <li class="page-item"><a class="page-link rounded-pill" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor

            {{-- Tampilkan link ke halaman terakhir --}}
            @if ($end < $paginator->lastPage())
                @if ($end < $paginator->lastPage() - 1)
                    <li class="page-item disabled"><span class="page-link rounded-pill">...</span></li>
                @endif
                <li class="page-item"><a class="page-link rounded-pill" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
            @endif

            {{-- Tombol Selanjutnya --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link rounded-pill" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="page-item disabled"><span class="page-link rounded-pill">&raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif

