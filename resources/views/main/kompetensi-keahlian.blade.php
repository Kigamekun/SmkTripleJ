@extends('main.base')


@section('menu')


<div class="wrapper-utama">
    <div class="menu-utama" data-aos="zoom-in">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <li class="nav-item active">
                    <a class="nav-link" href="/kompetensi-keahlian">Kompetensi Keahlian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hubungan-industri">Hubungan Industri</a>
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

<!-- Sambutan Kepala Sekolah -->
<div class="wrapper-utama detail-page">
    <h1 class="w-100 text-center mt-5" data-aos="fade-up">Kompetensi Keahlian</h1>

    <div class="wrapper-thumbnailmenu-detail">


    <div class="grid-wrap d-flex justify-content-center" data-aos="zoom-in">

        @foreach (DB::table('kompetensi_keahlians')->get() as $item)

            {{-- @dump($item)/ --}}
            <a class="list-block demo-3" href="/detail-kompetensi/{{$item->id}}">
                <figure>
                    <img src="{{ URL::asset('thumbKompetensi/' . $item->thumb) }}" alt="">
                    <figcaption>
                        <h2>{{ $item->nama }}</h2>
                    </figcaption>
                </figure>
            </a>
        @endforeach
</div>

</div>

</div>

<div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
</div>
<div class="white-space"></div>







@endsection
