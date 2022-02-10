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
                        <li class="nav-item active">
                            <a class="nav-link" href="/galeri">Galeri</a>
                        </li>
                        <li class="nav-item">
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
    <!--Waves end-->
    <div class="header-jurusan" data-aos="fade-up">
        <div class="title">
            <h1>Galeri</h1>
        </div>

    </div>
    <!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page-full" data-aos="fade-down">
        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true"><i class="far fa-images"></i> Galeri Foto</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false"><i class="fas fa-video"></i> Galeri Video</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="content-tab">
                    <div class="wrapper-galeri">

                        @foreach (DB::table('gallery')->get() as $item)
                            <div class="album">
                                <div class="overlay">
                                    <div class="album-info">
                                        <h2><i class="far fa-image"></i></h2>
                                        <h4>{{ $item->album_name }}</h4>
                                        {{-- <h6><i class="far fa-folder"></i> Kategori Album</h6> --}}
                                        <a href="/detail-album/{{ $item->id }}" class="btn btn-primary btn-sm">Detail
                                            Album</a>
                                    </div>
                                </div>

                                @php
                                    $thumb = json_decode($item->image, true);
                                @endphp

                                <img src="{{ URL::asset('gallery/' . $thumb[0]) }}" alt="">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="content-tab">
                    <div class="wrapper-galeri">
                        @foreach (DB::table('video')->get() as $item)
                            <div class="album">
                                <div class="overlay">
                                    <div class="album-info">
                                        <h2><i class="fas fa-video"></i></h2>
                                        <h4>Judul Album</h4>
                                        <h6><i class="far fa-folder"></i> Kategori Album</h6>
                                        <a href="/detail-album/{{ $item->id }}" class="btn btn-primary btn-sm">Detail
                                            Album</a>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}" alt="">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection
