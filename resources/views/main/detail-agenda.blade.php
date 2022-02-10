@extends('main.base')

@section('menu')


    <div class="wrapper-utama">
        <div class="menu-utama" data-aos="zoom-in">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>&nbsp;Menu Utama
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang-kami">SMKN 3 BOGOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kompetensi-keahlian">Kompetensi Keahlian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/hubungan-industri">Hubungan Industri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galeri">Galeri</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/agenda">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper-utama detail-page" data-aos="fade-up">
        <div class="left-side">
            <h5><i class="fas fa-calendar-alt"></i> {{ $data->tanggal }} | <i class="fas fa-map-marker-alt"></i> Lokasi
                Kegiatan</h5>
            <h2>{{ $data->judul }}</h2>


            <strong>Deskripsi Agenda / Pengumunan :</strong>
            {!! $data->deskripsi !!}

            <!-- ShareThis BEGIN -->
            <div class="sharethis-inline-share-buttons mt-2 mb-2"></div><!-- ShareThis END -->

        </div>
        <div class="right-side">
            <div class="banner-right owl-carousel owl-theme">
                <img src="{{ URL::asset('img/6608102.jpg') }}" alt="">
                <img src="{{ URL::asset('img/6608102.jpg') }}" alt="">
            </div>
        </div>
    </div>




@endsection
