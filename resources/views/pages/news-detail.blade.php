@extends('layouts.app')

<style>
    .ratio-container {
        aspect-ratio: 3 / 2;
        max-height: 600px;
    }
</style>

@section('content')
    <div class="container py-5"> 
        <div class="mb-4 text-center">
            <h1 class="fw-bold">{{ $berita->judul }}</h1>
            <p class="text-muted">
                {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') }}
            </p>
        </div>

        @if ($berita->gambar)
            <div class="ratio-container mb-4 mx-auto shadow rounded overflow-hidden" style="max-width: 900px;">
                <img src="{{ asset('/' . $berita->gambar) }}" alt="Gambar Berita"
                     class="img-fluid w-100 h-100 object-fit-cover">
            </div>
        @endif

        <article class="mb-4 text-start" style="text-align: justify;">
            {!! nl2br(e($berita->isi)) !!}
        </article>

        @if ($berita->sumber)
            <p class="mt-4 text-muted text-start">
                <strong>Sumber:</strong> <a href="{{ $berita->sumber }}" target="_blank">{{ $berita->sumber }}</a>
            </p>
        @endif
    </div>
@endsection
