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
    <link rel="stylesheet" href="{{ URL::asset('css/lightbox.min.css') }}">
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
                        @foreach (DB::table('banner')->where('judul','top-banner')->get() as $item)
                       <img src="{{ URL::asset('banner/'.$item->gambar) }}" alt="">
                       @endforeach
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

<!--Waves end-->
<div class="header-jurusan" data-aos="fade-up">
    <div class="title">
        <h1>{{$data->album_name}}</h1>
        <h6><i class="far fa-folder"></i> {{DB::table('kompetensi_keahlians')->where('id',$data->kompetensi)->first()->nama}}</h6>
    </div>

</div>
<!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page-full" data-aos="fade-down">


            <div class="content-tab">
                <div class="wrapper-galeri">
                   @foreach ((array)json_decode($data->image) as $item)

                   <div class="album">
                    <a href="{{ URL::asset('gallery/'.$item) }}" data-lightbox="image-1" data-title="My caption"><img src="{{ URL::asset('gallery/'.$item) }}" alt="" ></a>
                </div>
                   @endforeach
                </div>

            </div>
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
                @endif" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script src="{{ URL::asset('js/lightbox.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
