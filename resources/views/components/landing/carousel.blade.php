<style>
    #carouselExampleAutoplaying {
    max-height: 700px;
    overflow: hidden;
}

#carouselExampleAutoplaying .carousel-inner {
    height: 700px;
}

#carouselExampleAutoplaying .carousel-item img {
    height: 100%;
    object-fit: cover; /* atau 'contain' jika ingin seluruh gambar terlihat */
}

</style>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('1582345286151-IMG-20200222-WA0016_detail.png') }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('IMG-20200709-WA0034.jpg') }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('whatsapp_image_2020-02-21_at_17.34.17.png') }}" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
