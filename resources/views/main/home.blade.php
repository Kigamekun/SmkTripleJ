<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ URL::asset('img/logosmkn3.png') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <title>SMKN 3 BOGOR</title>
</head>

<body>
    <div class="header">
        <div class="gradient-overlay">
            <div class="wrapper-bigheader">
                <div class="logo" data-aos="zoom-in"><img src="{{ URL::asset('img/logosmkn3.png') }}" alt="">
                </div>
                <div class="web-title" data-aos="fade-up">
                    <h1>SMK NEGERI 3 BOGOR</h1>
                </div>
                <div class="social-media" data-aos="fade-down">
                    <div class="circle-icon"><a href="https://www.youtube.com/channel/UCUhHp7W8iBEAGTKljRxf-ww" class="text-white"><i class="fab fa-youtube fa-lg"></i></a></div>
                    <div class="circle-icon"><a href="https://www.tiktok.com/@osiskepati/" class="text-white"><i class="fab fa-tiktok fa-lg"></i></a></div>
                    <div class="circle-icon"><a href="https://www.instagram.com/osiskepati/" class="text-white"><i class="fab fa-instagram fa-lg"></i></a></div>

                </div>
            </div>
        </div>
        <div class="slider owl-carousel owl-theme">
            @foreach (DB::table('slider')->get() as $item)
                <div class="item"><img src="{{ URL::asset('slider/' . $item->gambar) }}" alt=""></div>
            @endforeach
        </div>
    </div>
    <center>
        <div class="wrapper-thumbnailmenu">

            <div class="d-flex justify-content-center" data-aos="fade-up">

                @foreach (DB::table('kompetensi_keahlians')->get() as $item)
                    {{-- @dump($item)/ --}}
                    <a class="list-block demo-3" href="/detail-kompetensi/{{ $item->id }}">
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
    </center>

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
    <div class="white-space">

    </div>

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

    <!--Waves end-->

    <!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama">
        <div class="panel-sambutan" data-aos="fade-up">
            <div class="left-side">
                <div class="photo" data-aos="zoom-in"><img src="
                           @if (!is_null(
    DB::table('staff')->where('urutan', 1)->first(),
))
                    {{ URL::asset('staffThumb/' .DB::table('staff')->where('urutan', 1)->first()->foto) }}
                    @endif
                    "
                    alt="">
                </div>
                <div class="name" data-aos="fade-down">
                    @if (!is_null(
    DB::table('staff')->where('urutan', 1)->first(),
))
                        {{ DB::table('staff')->where('urutan', 1)->first()->nama }}
                    @endif
                </div>
                <div class="position" data-aos="fade-down">Kepala Sekolah SMKN 3 Bogor</div>
            </div>
            <div class="right-side" data-aos="fade-up">
                <h2>Sambutan Kepala Sekolah</h2>
                <p>Assalamualaikum Warohmatullahi Wabarokatuh.</p>
                <p>Salam Sejahtera.<br>Perkembangan teknologi dewasa ini sangat mendominasi dalam segala aspek, baik
                    dari aspek Sosial, Ekonomi dan Pendidikan. Aplikasi Media sosial berkembang sangat cepat mulai dari
                    FB, WA, Twitter, Line dan sebagainya. Akhirnya hal tersebut menjadi tantangan baru bagi kita semua
                    untuk menyikapi dan menjawab perkembangan tersebut, yang pada akhirnya siswa tidak hanya dituntut
                    kemampuan pengetahuan, keterampilan dan sikap saja namun kemampuan emosi juga sangat dibutuhkan
                    dalam menghadapi perkembangan teknologi tersebut.</p>
                <p>Dalam menjawab kemajuan teknologi tersebut kami berharap
                    media Web Sekolah ini dapat menjadi salah satu media komunikasi bersifat informasi dan dapat
                    dimanfaatkan oleh siswa, guru, TU dan orang tua untuk mendapatkan informasi yang update dari
                    sekolah. </p>
                <p>Demikian semoga kehadiran Web sekolah ini dapat bermanfaat dan dapat memberikan informasi yang baik
                    dan benar kondisi dari SMK Negeri 3 Bogor.</p>
                <p>Salam</p>
            </div>
        </div>
    </div>
    <!-- Informasi Terkini -->
    @if (!is_null(DB::table('berita')->first()))
        <div class="wrapper-utama">
            <div class="panel-informasi">
                <div class="left-side">
                    <div class="big-news">
                        <h3>Informasi Terkini</h3>
                        <div class="headline" data-aos="fade-up">
                            <div class="overlay">
                                <div class="news-title">
                                    <div class="category-label-primary">{{ DB::table('categories')->where('id',DB::table('berita')->orderBy('created_at', 'DESC')->limit(1)->first()->categories)->first()->nama}}</div>
                                    <h2><a
                                            href="/detail-informasi/{{ DB::table('berita')->orderBy('created_at', 'DESC')->limit(1)->first()->id }}">{{ DB::table('berita')->orderBy('created_at', 'DESC')->limit(1)->first()->judul }}</a>
                                    </h2>
                                    <span><i class="fas fa-clock"></i>
                                        {{ DB::table('berita')->orderBy('created_at', 'DESC')->limit(1)->first()->created_at }}
                                        &nbsp;&nbsp; <i class="fas fa-user"></i> Administrator</span>
                                </div>
                            </div>
                            <img src="{{ URL::asset('thumbBerita/' .DB::table('berita')->orderBy('created_at', 'DESC')->limit(1)->first()->gambar) }}"
                                alt="">
                        </div>
                    </div>
                    <div class="wrapper-news-list" data-aos="fade-down">
                        <div class="space"></div>
                        @foreach (DB::table('berita')->orderBy('created_at', 'DESC')->skip(1)->take(3)->get()
    as $item)
                            <div class="news-list">
                                <div class="thumbnail">
                                    <div class="image-thumb">
                                        <img src="{{ URL::asset('thumbBerita/' . $item->gambar) }}" alt="">
                                    </div>
                                </div>
                                <div class="news-title">
                                    <div class="category-label-fourth">{{ DB::table('categories')->where('id',$item->categories)->first()->nama}}</div>
                                    <h5><a href="/detail-informasi/{{ $item->id }}">{{ $item->judul }}</a></h5>
                                    <span><i class="fas fa-clock"></i> {{ $item->created_at }}&nbsp;&nbsp; <i
                                            class="fas fa-user"></i> Administrator</span>
                                </div>
                            </div>
                        @endforeach
                        <a href="/index-informasi" class="btn btn-success w-100"><i
                                class="far fa-arrow-alt-circle-right"></i> Selengkapnya</a>
                    </div>
                </div>
                <div class="right-side" data-aos="fade-up">
                    <h3>Agenda</h3>

                    @foreach (DB::table('agenda')->where('role', 0)->limit(2)->orderBy('tanggal', 'DESC')->get()
    as $item)
                        <div class="agenda-list">
                            <div class="icon"><i class="fas fa-calendar-alt fa-3x"></i></div>
                            <div class="detail-agenda">
                                <h6>{{ $item->tanggal }}</h6>
                                <h4><a href="/agenda/{{ $item->id }}">{{ $item->judul }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                    <a href="/agenda" class="btn btn-success w-100"><i class="far fa-arrow-alt-circle-right"></i>
                        Selengkapnya</a>
                    <h3 class="mt-4">Pengumuman</h3>
                    @foreach (DB::table('agenda')->where('role', 1)->limit(2)->orderBy('tanggal', 'DESC')->get()
    as $item)
                        <div class="pengumuman-list">
                            <div class="icon"><i class="fas fa-bullhorn fa-3x"></i></div>
                            <div class="detail-agenda">
                                <h6>{{ $item->tanggal }}</h6>
                                <h4><a href="/agenda/{{ $item->id }}">{{ $item->judul }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                    <a href="/agenda" class="btn btn-success w-100"><i class="far fa-arrow-alt-circle-right"></i>
                        Selengkapnya</a>
                </div>
            </div>
        </div>
    @endif
    <!-- Statistik Website   -->
    <div class="wrapper-utama mt-4" data-aos="fade-up">
        <h3>Statistik Pengunjung Website</h3>
        <div class="statistik">
            <div class="panel-number">
                <div class="number">
                    <h2>789295</h2>
                </div>
                <h6>TOTAL HITS HALAMAN</h6>
            </div>
            <div class="panel-number">
                <div class="number">
                    <h2>143594</h2>
                </div>
                <h6>TOTAL PENGUNJUNG</h6>
            </div>
            <div class="panel-number">
                <div class="number">
                    <h2>72</h2>
                </div>
                <h6>HITS HARI INI</h6>
            </div>
            <div class="panel-number">
                <div class="number">
                    <h2>30</h2>
                </div>
                <h6>PENMGUNJUNG HARI INI</h6>
            </div>
            <div class="panel-number">
                <div class="number">
                    <h2>2</h2>
                </div>
                <h6>PENGUNJUNG ONLINE</h6>
            </div>
        </div>
    </div>
    <!-- Galeri Sekolah -->
    <div class="wrapper-utama mt-4" data-aos="fade-down">
        <h3 class="mt-4">Galeri Sekolah</h3>
        <div class="wrapper-galeri">
            <div class="left-side">

                @foreach (DB::table('gallery')->orderBy('created_at', 'DESC')->skip(1)->take(4)->get()
    as $key => $item)
                    <div class="thumbnail-galeri">
                        <div class="overlay">
                            <div class="album-title">
                                <h5><a href="/detail-album/{{ $item->id }}">{{ $item->album_name }}</a></h5>
                                {{-- <span><i class="far fa-images"></i> Galeri Kecantikan</span> --}}
                            </div>
                        </div>
                        <img src="{{ URL::asset('gallery/' . json_decode($item->image, true)[$key]) }}" alt="">
                    </div>
                @endforeach
            </div>
            @if (!is_null(DB::table('gallery')->first()))
                <div class="right-side">
                    <div class="thumbnail-galeri">
                        <div class="overlay">
                            <div class="album-title">
                                <h2><a href="/detail-album/{{ $item->id }}">
                                        {{ DB::table('gallery')->orderBy('created_at', 'DESC')->limit(1)->first()->album_name }}
                                        {{-- @endif --}}
                                    </a>
                                </h2>
                                {{-- <span><i class="far fa-images"></i> Galeri TKJ</span> --}}
                            </div>
                        </div>
                        <img src="
                     {{-- @if (!is_null(DB::table('gallery')->first())) --}}
                    {{ URL::asset('gallery/' .json_decode(DB::table('gallery')->orderBy('created_at', 'DESC')->limit(1)->first()->image,true)[0]) }}
                    " alt="">
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Ekstrakulikuler -->
    <div class="wrapper-utama" data-aos="fade-up">
        <h3 class="mt-4">Ekstrakulikuler</h3>
        <div class="section-ekstrakulikuler owl-theme owl-carousel">



            @foreach (DB::table('ekstrakurikuler')->get() as $item)
                <div class="thumbnail">
                    <div class="overlay">
                        <div class="ekskul-info">
                            <h4>{{ $item->nama }}</h4>
                            <strong>Jadwal :</strong>
                            <h6>{{ $item->jadwal }}</h6>
                            <br>
                            <strong>Pembina :</strong>
                            <h6>{{ DB::table('staff')->where('id', $item->pembina)->first()->nama }}</h6>
                        </div>
                    </div>
                    <img src="{{ URL::asset('thumbEkskul/' . $item->thumb) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>


    <!-- Banner Space -->
    <div class="wrapper-utama" data-aos="fade-up">
        <div class="banner-full mt-4">
            <h2>Banner Space Here</h2>
        </div>
    </div>

    <!-- Institusi Pasangan  -->
    <div class="wrapper-utama mt-5 mb-5" data-aos="fade-up">
        <h3 class="mt-4">Industri Pasangan</h3>
        <div class="wrapper-logo owl-carousel owl-theme">
        <div class="logo"><img src="{{ URL::asset('img/prt1.jpeg') }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt2.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt3.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt4.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt5.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt6.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt7.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt8.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt9.jpeg' ) }}" alt=""></div>
        <div class="logo"><img src="{{ URL::asset('img/prt10.jpeg' ) }}" alt=""></div>
        </div>

    </div>

    <!-- footer -->

    <div class="footer" data-aos="fade-up">
        <div class="wrapper-utama">
            <div class="wrapper-footer">
                <div class="maps">
                    <iframe src="
                         @if (DB::table('maps')->where('nama', 'alamat')->first())
                        {{ DB::table('maps')->where('nama', 'alamat')->first()->embed_maps }}
                        @endif
                        "
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="alamat">
                    <h4 class="mb-3">SMKN 3 Bogor</h4>
                    <h6> Jl. Raya Pajajaran No. 84 Bogor - 15161</h6>
                    <div class="wrapper-contact">
                        <div class="item"><i class="fa fa-phone"></i> 02518358687 </div>
                        <div class="item"><i class="fa fa-envelope"></i> <a
                                href="mailto:smkn3bgr@gmail.com">smkn3bgr@gmail.com</a> </div>
                        <div class="item"><i class="fab fa-facebook-square"></i> <a href="">SMKN 3 Bogor</a>
                        </div>
                        <div class="item">
                            <i class="fab fa-youtube"></i>
                            <a href="https://www.youtube.com/channel/UCUhHp7W8iBEAGTKljRxf-ww"> Youtube</a>
                        </div>
                        <div class="item">
                            <i class="fab fa-tiktok"></i>
                             <a href="https://www.tiktok.com/@osiskepati/" >Tiktok</a>
                        </div>
                        <div class="item">
                            <i class="fab fa-instagram"></i>
                            <a href="https://www.instagram.com/osiskepati/" > Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-second">
        <div class="text-center">
            <h6>Copyright 2022 SMKN 3 Bogor</h6>
        </div>
    </div>






    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/aos.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>
