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

    <!--Waves end-->
    <div class="header-jurusan" data-aos="fade-up">
        <div class="title">
            <h1>Hubungan Industri</h1>
        </div>

    </div>
    <!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page-full" data-aos="fade-down">
        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Teaching Factory</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">LSP-P1</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>Teaching Factory</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                            classical literature, discovered the undoubtable source.
                        </p>
                        <p>
                            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                            Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                            ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor
                            sit amet..", comes from a line in section 1.10.32.
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>LSP-P1</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p>
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                            classical literature, discovered the undoubtable source.
                        </p>
                        <p>
                            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                            Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
                            ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor
                            sit amet..", comes from a line in section 1.10.32.
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h4 class="text-primary">Visi :</h4>
                        <p>Mewujudkan SMK Negeri 3 Bogor menjadi Sekolah yang Unggul dalam Prestasi Akademik dan berwawasan
                            Lingkungan</p>
                        <br><br>
                        <h4 class="text-primary">Misi :</h4>
                        <p><strong>Lembaga</strong></p>
                        <p>
                            Menjadikan SMK Negeri 3 Bogor, lembaga yang menjunjung tinggi aspek moralitas dan mengem-
                            bangkannya menjadi sekolah yang inovatif, kreatif dalam mengembangkan SDM yang berjiwa
                            wirausaha.
                        </p>
                        <p><strong>Pendidik dan Ketenagapendidikan</strong></p>
                        <p>
                            Meningkatkan profesionalisme dalam pelayanan yang berbasis IT serta terus mengembangkan diri
                            dengan tetap mengedepankan aspek pendidikan
                        </p>
                        <p><strong>Siswa</strong></p>
                        <p>Menghasilkan tamatan yang mampu bekerja, mandiri, bertanggung jawab dan terus meningkatkan
                            keimanan, ketaqwaan, ilmu pengetahuan, keterampilan dengan prinsip belajar sepanjang hayat serta
                            mampu bersikap responsif dan adaptif terhadap perkembangan di era global</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="t4" role="tabpanel" aria-labelledby="t4-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>Pendidik dan Tenagakependidikan</h2>
                        <p>Content Here</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="t5" role="tabpanel" aria-labelledby="t5-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>Kesiswaan</h2>
                        <p>Content Here</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="t6" role="tabpanel" aria-labelledby="t6-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>Kurikulum</h2>
                        <p>Content Here</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="t7" role="tabpanel" aria-labelledby="t7-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>Sarana Prasarana</h2>
                        <p>Content Here</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="t8" role="tabpanel" aria-labelledby="t8-tab">
                <div class="content-tab">
                    <div class="left-side">
                        <div class="photo"><img src="{{ URL::asset('img/Gedung-SMKN-3-Kota-Bogor.jpeg') }}"
                                alt=""></div>
                    </div>
                    <div class="right-side">
                        <h2>Hubinmas</h2>
                        <p>Content Here</p>
                    </div>
                </div>
            </div>
        </div>

    </div>








    <!-- Institusi Pasangan  -->
    <div class="wrapper-utama mt-5 mb-5" data-aos="fade-up">
        <h3 class="mt-4">Industri Pasangan</h3>
        <div class="wrapper-logo owl-carousel owl-theme">
            <div class="logo"><img src="{{ URL::asset('img/dicoding.png') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/pertamina.png') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/mnc.png') }}" alt=""></div>
            <div class="logo"><img src="{{ URL::asset('img/axa.png') }}" alt=""></div>
        </div>

    </div>

@endsection
