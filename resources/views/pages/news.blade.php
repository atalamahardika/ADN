@extends('layouts.app')
@section('content')
    <div class="container my-5" id>
        <h2 class="text-center mb-4">Portal Berita</h2>

        @foreach ($berita as $item)
            <x-landing.navigation.news-card :image="$item->gambar" :title="$item->judul" :link="route('pages.news-detail', $item->slug)" />
        @endforeach

        <div class="d-flex justify-content-center mt-4">
            {{ $berita->links('vendor.pagination.bootstrap-5-custom') }}
        </div>

    </div>
@endsection
