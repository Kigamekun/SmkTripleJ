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
                        <li class="nav-item active">
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
                        <li class="nav-item ">
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
            <h1>Tentang SMKN 3 Bogor</h1>
        </div>

    </div>
    <!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page-full" data-aos="fade-up">

        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Sambutan Kepala Sekolah</a>
            </li>

            {{-- <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Visi & Misi</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t4-tab" data-toggle="pill" href="#t4" role="tab" aria-controls="t4"
                    aria-selected="false">Pendidik dan Tendik</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t5-tab" data-toggle="pill" href="#t5" role="tab" aria-controls="t5"
                    aria-selected="false">Kesiswaan</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t6-tab" data-toggle="pill" href="#t6" role="tab" aria-controls="t6"
                    aria-selected="false">Kurikulum</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t7-tab" data-toggle="pill" href="#t7" role="tab" aria-controls="t7"
                    aria-selected="false">Sarana Prasarana</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t8-tab" data-toggle="pill" href="#t8" role="tab" aria-controls="t8"
                    aria-selected="false">Hubinmas</a>
            </li> --}}

            @foreach (DB::table('halaman_statis')->get() as $item)
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-t{{ $item->id }}-tab" data-toggle="pill"
                        href="#t{{ $item->id }}" role="tab" aria-controls="t{{ $item->id }}"
                        aria-selected="false">{{ $item->title }}</a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="pills-tabContent" data-aos="fade-up">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="panel-sambutan">
                    <div class="left-side">
                        <div class="photo"><img src="
                            @if (!is_null(
                                DB::table('staff')->where('urutan', 1)->first(),
                            )) {{ URL::asset('staffThumb/' .DB::table('staff')->where('urutan', 1)->first()->foto) }} @endif
                                " alt=""></div>
                        <div class="name">
                            @if (!is_null(
                                DB::table('staff')->where('urutan', 1)->first(),
                            ))
                                {{ DB::table('staff')->where('urutan', 1)->first()->nama }}
                            @endif
                        </div>
                        <div class="position">Kepala Sekolah SMKN 3 Bogor</div>
                    </div>
                    <div class="right-side">
                        @if (!is_null(
                            DB::table('staff')->where('urutan', 1)->first(),
                        ))
                            {!! DB::table('staff')->where('urutan', 1)->first()->sambutan !!}
                        @endif
                    </div>
                </div>
            </div>


            @foreach (DB::table('halaman_statis')->get() as $item)
                <div class="tab-pane fade" id="t{{ $item->id }}" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="content-tab">
                        {!! $item->content !!}
                    </div>
                </div>
            @endforeach
        </div>

    </div>








    <!-- Institusi Pasangan  -->
    <div class="wrapper-utama mt-5 mb-5" data-aos="fade-up">
        <h3 class="mt-4">Industri Pasangan</h3>
        <div class="wrapper-logo owl-carousel owl-theme">
            <div class="logo"><img src="{{ URL::asset('img/prt1.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt2.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt3.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt4.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt5.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt6.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt7.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt8.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt9.jpeg') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/prt10.jpeg') }}" alt=""></div>
        </div>

    </div>
@endsection
