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




  <div class="header-subpage" data-aos="fade-down">
        <div class="wrapper-utama">
            <div class="wrapper-subpage">
                <div class="left-side">
                    <div class="logo">
                        <img src="{{ URL::asset('img/logosmkn3.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h2>SMK Negeri 3 Bogor</h2>
                    </div>
                </div>
                <div class="right-side">
                    <div class="top-banner owl-carousel owl-theme">
                        <img src="{{ URL::asset('img/topbnr.png') }}" alt="">
                        <img src="{{ URL::asset('img/topbnr.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



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

<!--Waves end-->
<!-- <div class="header-detail">
    <div class="title">
        <div class="wrapper-utama">
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
        </div>
    </div>

</div> -->
<!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page" data-aos="fade-up">
        <div class="left-side">
            <span><i class="fas fa-clock"></i> {{$data->created_at}} &nbsp;&nbsp; <i class="fas fa-user"></i> Administrator</span>
            <h3>{{$data->judul}}</h3>
            <div class="img-cover">
            <img src="{{ URL::asset('thumbBerita/' .$data->gambar) }}" alt="">
            </div>
            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons mt-2 mb-2"></div><!-- ShareThis END -->
            {!! $data->content !!}

            <h3 class="mt-5">Informasi Lainnya</h3>
            <div class="wrapper-related">
               @foreach (App\Models\Berita::all()->random(4) as $item)

                <div class="card-related">
                    <div class="image-cover">
                        <img src="{{ URL::asset('thumbBerita/' .$item->gambar) }}" alt="">
                    </div>
                    <div class="detail-related">
                        <span><i class="fas fa-clock"></i>{{$item->created_at}}</span>
                        <h3><a href="/detail-informasi/{{$item->id}}">{{$item->judul}}</a></h3>

                    </div>
                </div>
               @endforeach
            </div>
        </div>
        <div class="right-side" data-aos="fade-up">
            <h3>Agenda</h3>

            @foreach (DB::table('agenda')->where('role', 0)->limit(2)->orderBy('tanggal', 'DESC')->get() as $item)
                <div class="agenda-list">
                    <div class="icon"><i class="fas fa-calendar-alt fa-3x"></i></div>
                    <div class="detail-agenda">
                        <h6>{{ $item->tanggal }}</h6>
                        <h4><a href="/detail-agenda/{{$item->id}}">{{ $item->judul }}</a></h4>
                    </div>
                </div>
            @endforeach
            <a href="" class="btn btn-success w-100"><i class="far fa-arrow-alt-circle-right"></i>
                Selengkapnya</a>
            <h3 class="mt-4">Pengumuman</h3>
            @foreach (DB::table('agenda')->where('role', 1)->limit(2)->orderBy('tanggal', 'DESC')->get() as $item)
                <div class="pengumuman-list">
                    <div class="icon"><i class="fas fa-bullhorn fa-3x"></i></div>
                    <div class="detail-agenda">
                        <h6>{{ $item->tanggal }}</h6>
                        <h4><a href="/detail-agenda/{{$item->id}}">{{ $item->judul }}</a></h4>
                    </div>
                </div>
            @endforeach
            <a href="" class="btn btn-success w-100"><i class="far fa-arrow-alt-circle-right"></i>
                Selengkapnya</a>
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
                " width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                    <div class="alamat">
                        <h4 class="mb-3">SMKN 3 Bogor</h4>
                        <h6> Jl. Raya Pajajaran No. 84 Bogor - 15161</h6>
                        <div class="wrapper-contact">
                            <div class="item"><i class="fa fa-phone"></i> +6225166359721 </div>
                            <div class="item"><i class="fa fa-envelope"></i> <a href="mailto:info@smk1triplej.sch.i">info@smkn3bogor.sch.id</a> </div>
                            <div class="item"><i class="fab fa-facebook-square"></i> <a href="">SMKN 3 Bogor</a> </div>
                            <div class="item"><i class="fab fa-instagram"></i> <a href="">@smkn3bogor</a> </div>
                            <div class="item"><i class="fab fa-twitter"></i> <a href="">@smkn3bogor</a> </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="footer-second">
        <div class="text-center"><h6>Copyright 2022 SMKN 3 Bogor</h6></div>
        </div>






    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/aos.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60405af332910c0018e217d1&product=sop' async='async'></script>

  </body>
</html>
