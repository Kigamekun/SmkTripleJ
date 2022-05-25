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
    <style>
        body {
            overflow-x: hidden;
        }

    </style>

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
                        @foreach (DB::table('banner')->where('judul', 'top-banner')->get()
    as $item)
                            <img src="{{ URL::asset('banner/' . $item->gambar) }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    @yield('menu')






    @yield('content')







    <!-- footer -->

    <div class="footer" data-aos="fade-up">
        <div class="wrapper-utama">
            <div class="wrapper-footer">
                <div class="maps">
                    <iframe src="
                        @if (DB::table('maps')->where('nama', 'alamat')->first()) {{ DB::table('maps')->where('nama', 'alamat')->first()->embed_maps }} @endif
                        " width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="alamat">
                    <h4 class="mb-3">SMKN 3 Bogor</h4>
                    <h6> @if (DB::table('maps')->where('nama', 'alamat')->first()) {{ DB::table('maps')->where('nama', 'alamat')->first()->alamat }} @endif</h6>
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

</body>

</html>
