@extends('layouts.app')

@section('content')
    <section class="py-16 bg-white">
        <div class="container my-5">
            <h2 class="text-center mb-4">Divisi Aliansi Dosen Nahada</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi I" region="Wilayah Sumatra" link="/divisi-i" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi II" region="Wilayah Jawa Barat" link="/divisi-ii" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi III" region="Wilayah Jawa Tengah" link="/divisi-iii" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi IV" region="Wilayah Jawa Timur" link="/divisi-iv" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi V" region="Wilayah Bali & Nusa Tenggara" link="/divisi-v" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi VI" region="Wilayah Kalimantan" link="/divisi-vi" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi VII" region="Wilayah Sulawesi & Maluku" link="/divisi-vii" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi VIII" region="Wilayah Papua" link="/divisi-viii" />
                </div>
                <div class="col-md-4 col-lg-3">
                    <x-landing.navigation.divisi-card title="Divisi IX" region="Wilayah DKI" link="/divisi-ix" />
                </div>
            </div>
        </div>
    </section>
@endsection
