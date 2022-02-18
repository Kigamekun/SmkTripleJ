@extends('main.base')

@section('menu')


    <div class="wrapper-utama">
        <div class="menu-utama" data-aos="fade-up">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>Menu Utama
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang-kami">SMKN 3 BOGOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kompetensi-keahlian">Kompetensi Keahlian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index-informasi">Informasi Terkini</a>
                        </li>
                        <li class="nav-item">
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
            <h1>Agenda dan Pengumuman</h1>
        </div>

    </div>
    <!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page-full" data-aos="fade-up">
        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true"><i class="far fa-calendar"></i> Agenda</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false"><i class="fas fa-bullhorn"></i> Pengumuman</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="content-tab">
                    <div class="wrapper-agenda">


                        @foreach (DB::table('agenda')->where('role', 0)->get()
        as $item)
                            <div class="card-agenda">
                                <div class="icon"><i class="far fa-calendar-alt fa-4x"></i></div>
                                <div class="agenda-info">
                                    <h6>{{ $item->tanggal }}</h6>
                                    <h3>{{ $item->judul }}</h3>
                                    <a href="/detail-agenda/{{ $item->id }}"
                                        class="btn btn-warning btn-sm d-inline">Detail Agenda</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="content-tab">
                    <div class="wrapper-agenda">
                        @foreach (DB::table('agenda')->where('role', 1)->get()
        as $item)
                            <div class="card-agenda">
                                <div class="icon"><i class="fas fa-bullhorn fa-4x"></i></div>
                                <div class="agenda-info">
                                    <h6>{{ $item->tanggal }}</h6>
                                    <h3>{{ $item->judul }}</h3>
                                    <a href="/detail-agenda/{{ $item->id }}"
                                        class="btn btn-warning btn-sm d-inline">Detail
                                        Pengumuman</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>








@endsection
