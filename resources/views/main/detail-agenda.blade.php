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
            <h5><i class="fas fa-calendar-alt"></i> {{$data->tanggal}} | <i class="fas fa-map-marker-alt"></i> Lokasi
                Kegiatan</h5>
            <h2>{{$data->judul}}</h2>


            <strong>Deskripsi Agenda / Pengumunan :</strong>
            {!!$data->deskripsi!!}

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










    <!-- footer -->

    <div class="footer" data-aos="fade-up">
        <div class="wrapper-utama">
            <div class="wrapper-footer">
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5104845893075!2d106.80432321530279!3d-6.58328346618726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c432ae544a97%3A0x15ae2b0a1aa5a4d9!2sSMKN%203%20Bogor!5e0!3m2!1sen!2sid!4v1642992472849!5m2!1sen!2sid"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="alamat">
                    <h4 class="mb-3">SMKN 3 Bogor</h4>
                    <h6> Jl. Raya Pajajaran No. 84 Bogor - 15161</h6>
                    <div class="wrapper-contact">
                        <div class="item"><i class="fa fa-phone"></i> +6225166359721 </div>
                        <div class="item"><i class="fa fa-envelope"></i> <a
                                href="mailto:info@smk1triplej.sch.i">info@smkn3bogor.sch.id</a> </div>
                        <div class="item"><i class="fab fa-facebook-square"></i> <a href="">SMKN 3 Bogor</a>
                        </div>
                        <div class="item"><i class="fab fa-instagram"></i> <a href="">@smkn3bogor</a> </div>
                        <div class="item"><i class="fab fa-twitter"></i> <a href="">@smkn3bogor</a> </div>
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

    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=60405af332910c0018e217d1&product=sop'
        async='async'></script>

</body>

</html>
