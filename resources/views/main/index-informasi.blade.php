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
        <h1>Informasi Terkini</h1>
    </div>
</div>

<div class="wrapper-utama detail-page-full">

    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-t1-tab" data-toggle="pill" href="#t1" role="tab" aria-controls="t1" aria-selected="false">
                 Umum
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-t2-tab" data-toggle="pill" href="#t2" role="tab" aria-controls="t2" aria-selected="false">
                 Jurusan
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-t3-tab" data-toggle="pill" href="#t3" role="tab" aria-controls="t3" aria-selected="false">
                 Hubinmas
            </a>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent" data-aos="fade-up">
        <div class="tab-pane fade show active" id="t1" role="tabpanel" aria-labelledby="t1-tab">
            <div class="content-tab">
                <h1 class="ms-2 mt-2 mb-4">UMUM</h1>
                <div class="wrapper-berita">
                  @foreach ($data as $item)
                  <div class="card-berita">
                    <div class="thumbnail">
                        <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                    </div>
                    <div class="detail-berita">
                        <h6>{{$item->created_at}}</h6>
                        <h3><a href="/detail-informasi/{{$item->id}}">{{ $item->judul }}</a></h3>
                    </div>
                </div>
                  @endforeach
               </div>
            </div>
        </div>
        <div class="tab-pane fade" id="t2" role="tabpanel" aria-labelledby="t2-tab">
            <div class="content-tab">
                <h1 class="ms-2 mt-2 mb-4">JURUSAN</h1>
                <div class="wrapper-berita">

                  @foreach ($data as $item)
                  <div class="card-berita">
                    <div class="thumbnail">
                        <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                    </div>
                    <div class="detail-berita">
                        <h6>{{$item->created_at}}</h6>
                        <h3><a href="/detail-informasi/{{$item->id}}">{{ $item->judul }}</a></h3>
                    </div>
                </div>
                  @endforeach
               </div>
            </div>
        </div>
        <div class="tab-pane fade" id="t3" role="tabpanel" aria-labelledby="t3-tab">
            <div class="content-tab">
                <h1 class="ms-2 mt-2 mb-4">HUBIMNAS</h1>
                <div class="wrapper-berita">

                  @foreach ($data as $item)
                  <div class="card-berita">
                    <div class="thumbnail">
                        <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                    </div>
                    <div class="detail-berita">
                        <h6>{{$item->created_at}}</h6>
                        <h3><a href="/detail-informasi/{{$item->id}}">{{ $item->judul }}</a></h3>
                    </div>
                </div>
                  @endforeach
               </div>
            </div>
        </div>
    </div>
</div>





@endsection