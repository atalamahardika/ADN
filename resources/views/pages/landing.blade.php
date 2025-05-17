{{-- Docementation --}}
{{-- Halaman ini adalah halaman landing page yang memuat components yang sesuai dengan design. --}}
{{-- End Documentation --}}

@extends('layouts.app')
@section('content')
    @include('components.landing.carousel')
    @include('components.landing.hero')
    @include('components.landing.about')
    @include('components.landing.count')
    @include('components.landing.news', ['beritas' => $beritas])
    @include('components.landing.contact')
@endsection
