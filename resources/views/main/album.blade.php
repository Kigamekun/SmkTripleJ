<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ URL::asset('img/logo-triplej-1.jpeg') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <title>SMK 1 Triple J</title>
</head>

<body>
    <div class="header-detailpage">

        <div class="menubar">
            <div class="wrapper-menu" id="navbar">
                <div class="space-logo">
                    <div class="logo"><img src="{{ URL::asset('img/logo-triplej-1.jpeg') }}" alt=""></div>
                    <div class="title">SMK 3 KOTA BOGOR</div>
                </div>
                <div class="space-menu">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/tentang-kami">Tentang
                                            Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/kompetensi-keahlian">Kompetensi Keahlian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/index-informasi">Informasi Terkini</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/kesiswaan">Kesiswaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/info-pendaftaran">Pendaftaran Siswa Baru</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/galeri">Galeri</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
        <div class="cover">
            <div class="item"><img src="{{ URL::asset('img/slider1.jpeg') }}" alt=""></div>
            <div class="overlay">
                <h3>Nama Album</h3>
            </div>
        </div>

    </div>

    <!-- KOnten -->
    <div class="container-custom mb-5">
        <div class="wrapper-album">
            <div class="photo-panel">
                <div class="image"><a href="{{ URL::asset('img/g1.jpeg') }}" data-lightbox="image-1"><img
                            src="{{ URL::asset('img/g1.jpeg') }}" alt=""></a></div>
                <div class="photo-info">
                    <div class="photo-title"><a href="{{ URL::asset('img/g1.jpeg') }}"
                            data-lightbox="image-1">Photo Description</a></div>
                </div>
            </div>
            <div class="photo-panel">
                <div class="image"><a href="{{ URL::asset('img/g2.jpeg') }}" data-lightbox="image-1"><img
                            src="{{ URL::asset('img/g2.jpeg') }}" alt=""></a></div>
                <div class="photo-info">
                    <div class="photo-title"><a href="{{ URL::asset('img/g2.jpeg') }}"
                            data-lightbox="image-1">Photo Description</a></div>
                </div>
            </div>
            <div class="photo-panel">
                <div class="image"><a href="{{ URL::asset('img/g3.jpeg') }}" data-lightbox="image-1"><img
                            src="{{ URL::asset('img/g3.jpeg') }}" alt=""></a></div>
                <div class="photo-info">
                    <div class="photo-title"><a href="{{ URL::asset('img/g3.jpeg') }}"
                            data-lightbox="image-1">Photo Description</a></div>
                </div>
            </div>
            <div class="photo-panel">
                <div class="image"><a href="{{ URL::asset('img/g4.jpeg') }}" data-lightbox="image-1"><img
                            src="{{ URL::asset('img/g4.jpeg') }}" alt=""></a></div>
                <div class="photo-info">
                    <div class="photo-title"><a href="{{ URL::asset('img/g4.jpeg') }}"
                            data-lightbox="image-1">Photo Description</a></div>
                </div>
            </div>
            <div class="photo-panel">
                <div class="image"><a href="{{ URL::asset('img/g5.jpeg') }}" data-lightbox="image-1"><img
                            src="{{ URL::asset('img/g5.jpeg') }}" alt=""></a></div>
                <div class="photo-info">
                    <div class="photo-title"><a href="{{ URL::asset('img/g5.jpeg') }}"
                            data-lightbox="image-1">Photo Description</a></div>
                </div>
            </div>
            <div class="photo-panel">
                <div class="image"><a href="{{ URL::asset('img/g6.jpeg') }}" data-lightbox="image-1"><img
                            src="{{ URL::asset('img/g6.jpeg') }}" alt=""></a></div>
                <div class="photo-info">
                    <div class="photo-title"><a href="{{ URL::asset('img/g6.jpeg') }}"
                            data-lightbox="image-1">Photo Description</a></div>
                </div>
            </div>

        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>





    <!-- footer -->
    <div class="container-custom">
        <div class="footer">
            <div class="maps">
                <iframe src="
                    @if (DB::table('maps')->where('nama', 'alamat')->first()) {{ DB::table('maps')->where('nama', 'alamat')->first()->embed_maps }} @endif
                    " width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="alamat">
                <h4 class="mb-3">SMK 1 Triple "J"</h4>
                <h6>Jl. Landbow No.1, Karang Asem Bar., Kec. Citeureup, Bogor, Jawa Barat 16810</h6>
                <div class="wrapper-contact">
                    <div class="item"><i class="fa fa-phone"></i> (021) 8757384 </div>
                    <div class="item"><i class="fa fa-envelope"></i> <a
                            href="mailto:info@smk1triplej.sch.i">info@smk1triplej.sch.id</a> </div>
                    <div class="item"><i class="fab fa-facebook-square"></i> <a href="">SMK 1 Triple J</a>
                    </div>
                    <div class="item"><i class="fab fa-instagram"></i> <a href="">@smk1triplej</a> </div>
                    <div class="item"><i class="fab fa-twitter"></i> <a href="">@smk1triplej</a> </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <h6>Copyright 2021 SMK 1 Triple J</h6>
        </div>
    </div>





    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/lightbox.min.js') }}"></script>
    <script src="{{ URL::asset('js/aos.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--
    Option 2: jQuery, Popper.js, and Bootstrap JS -->
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
