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
                        <li class="nav-item active">
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
            @if (isset($_GET['type']))
                @foreach (DB::table('categories')->get() as $key => $item)
                    @if ($item->id == $_GET['type'])
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" id="pills-t{{ $item->id }}-tab" data-toggle="pill"
                                href="#t{{ $item->id }}" role="tab" aria-controls="t{{ $item->id }}"
                                aria-selected="false">
                                {{ $item->nama }}
                            </a>
                        </li>

                    @else
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-t{{ $item->id }}-tab" data-toggle="pill"
                                href="#t{{ $item->id }}" role="tab" aria-controls="t{{ $item->id }}"
                                aria-selected="false">
                                {{ $item->nama }}
                            </a>
                        </li>
                    @endif
                @endforeach

            @else

                @foreach (DB::table('categories')->get() as $key => $item)
                    @if ($key == 0)
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" id="pills-t{{ $item->id }}-tab" data-toggle="pill"
                                href="#t{{ $item->id }}" role="tab" aria-controls="t{{ $item->id }}"
                                aria-selected="false">
                                {{ $item->nama }}
                            </a>
                        </li>

                    @else

                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-t{{ $item->id }}-tab" data-toggle="pill"
                                href="#t{{ $item->id }}" role="tab" aria-controls="t{{ $item->id }}"
                                aria-selected="false">
                                {{ $item->nama }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
        
        <div class="tab-content" id="pills-tabContent" data-aos="fade-up">

            @foreach (DB::table('categories')->get() as $key => $item)
                @if (!isset($_GET['type']))
                    @if ($key == 0)
                        <div class="tab-pane fade active show" id="t{{ $item->id }}" role="tabpanel" aria-labelledby="t{{ $item->id }}-tab">
                            <div class="content-tab">
                                <h1 class="ms-2 mt-2 mb-4">{{$item->nama}}</h1>
                                <div class="wrapper-berita">
                                    @foreach (DB::table('berita')->where('categories', $item->id)->get() as $item)
                                        <div class="card-berita">
                                            <div class="thumbnail">
                                                <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                                            </div>
                                            <div class="detail-berita">
                                                <h6>{{ $item->created_at }}</h6>
                                                <h3>
                                                    <a href="/detail-informasi/{{ $item->id }}">{{ $item->judul }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    @else
                        <div class="tab-pane fade" id="t{{ $item->id }}" role="tabpanel"
                            aria-labelledby="t{{ $item->id }}-tab">
                            <div class="content-tab">
                                <h1 class="ms-2 mt-2 mb-4">{{$item->nama}}</h1>
                                <div class="wrapper-berita">

                                    @foreach (DB::table('berita')->where('categories', $item->id)->get() as $item)
                                        <div class="card-berita">
                                            <div class="thumbnail">
                                                <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                                            </div>
                                            <div class="detail-berita">
                                                <h6>{{ $item->created_at }}</h6>
                                                <h3><a
                                                        href="/detail-informasi/{{ $item->id }}">{{ $item->judul }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif

                @else


                    @if ($item->id == $_GET['type'])
                        <div class="tab-pane fade active show" id="t{{ $item->id }}" role="tabpanel"
                            aria-labelledby="t{{ $item->id }}-tab">
                            <div class="content-tab">
                                <h1 class="ms-2 mt-2 mb-4">{{$item->nama}}</h1>
                                <div class="wrapper-berita">

                                    @foreach (DB::table('berita')->where('categories', $item->id)->get() as $item)
                                        <div class="card-berita">
                                            <div class="thumbnail">
                                                <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                                            </div>
                                            <div class="detail-berita">
                                                <h6>{{ $item->created_at }}</h6>
                                                <h3><a
                                                        href="/detail-informasi/{{ $item->id }}">{{ $item->judul }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    @else
                        <div class="tab-pane fade" id="t{{ $item->id }}" role="tabpanel"
                            aria-labelledby="t{{ $item->id }}-tab">
                            <div class="content-tab">
                                <h1 class="ms-2 mt-2 mb-4">{{$item->nama}}</h1>
                                <div class="wrapper-berita">

                                    @foreach (DB::table('berita')->where('categories', $item->id)->get() as $item)
                                        <div class="card-berita">
                                            <div class="thumbnail">
                                                <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                                            </div>
                                            <div class="detail-berita">
                                                <h6>{{ $item->created_at }}</h6>
                                                <h3><a
                                                        href="/detail-informasi/{{ $item->id }}">{{ $item->judul }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>





@endsection
