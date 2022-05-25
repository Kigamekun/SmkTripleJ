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
                        <li class="nav-item">
                            <a class="nav-link" href="/index-informasi">Informasi Terkini</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/galeri">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agenda">Agenda</a>
                        </li>
                        <li class="nav-item active">
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
            <h1 class="mt-5">Kontak Kami</h1>
            <hr>
            <form class="w-75">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nama Lengkap">
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Email</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Email">
                    </div>

                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Email</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2 mt-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- Sambutan Kepala Sekolah -->
@endsection
