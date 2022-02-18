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
                    <li class="nav-item active">
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
                    <li class="nav-item ">
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
            <h1>Tentang SMKN 3 Bogor</h1>
        </div>

    </div>
    <!-- Sambutan Kepala Sekolah -->
    <div class="wrapper-utama detail-page-full" data-aos="fade-up">
        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Sambutan Kepala Sekolah</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Profil Sekolah</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Visi & Misi</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t4-tab" data-toggle="pill" href="#t4" role="tab" aria-controls="t4"
                    aria-selected="false">Pendidik dan Tendik</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t5-tab" data-toggle="pill" href="#t5" role="tab" aria-controls="t5"
                    aria-selected="false">Kesiswaan</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t6-tab" data-toggle="pill" href="#t6" role="tab" aria-controls="t6"
                    aria-selected="false">Kurikulum</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t7-tab" data-toggle="pill" href="#t7" role="tab" aria-controls="t7"
                    aria-selected="false">Sarana Prasarana</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-t8-tab" data-toggle="pill" href="#t8" role="tab" aria-controls="t8"
                    aria-selected="false">Hubinmas</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent" data-aos="fade-up">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="panel-sambutan">
                    <div class="left-side">
                        <div class="photo"><img src="
                         @if (!is_null(
    DB::table('staff')->where('urutan', 1)->first(),
))
                            {{ URL::asset('staffThumb/' .DB::table('staff')->where('urutan', 1)->first()->foto) }}
                            @endif
                            " alt=""></div>
                        <div class="name">
                            @if (!is_null(
    DB::table('staff')->where('urutan', 1)->first(),
))
                                {{ DB::table('staff')->where('urutan', 1)->first()->nama }}
                            @endif
                        </div>
                        <div class="position">Kepala Sekolah SMKN 3 Bogor</div>
                    </div>
                    <div class="right-side">
                        <h2>Sambutan Kepala Sekolah</h2>
                        <p>Assalamualaikum Warohmatullahi Wabarokatuh.</p>
                        <p>Salam Sejahtera.<br>Perkembangan teknologi dewasa ini sangat mendominasi dalam segala aspek,
                            baik dari aspek Sosial, Ekonomi dan Pendidikan. Aplikasi Media sosial berkembang sangat
                            cepat mulai dari FB, WA, Twitter, Line dan sebagainya. Akhirnya hal tersebut menjadi
                            tantangan baru bagi kita semua untuk menyikapi dan menjawab perkembangan tersebut, yang pada
                            akhirnya siswa tidak hanya dituntut kemampuan pengetahuan, keterampilan dan sikap saja namun
                            kemampuan emosi juga sangat dibutuhkan dalam menghadapi perkembangan teknologi tersebut.</p>
                        <p>Untuk menjawab kemajuan teknologi tersebut kami berharap media Web Sekolah ini dapat menjadi
                            salah satu media komunikasi bersifat informasi dan dapat dimanfaatkan oleh siswa, guru, TU
                            dan orang tua untuk mendapatkan informasi yang update dari sekolah. </p>
                        <p>Demikian semoga kehadiran Web sekolah ini dapat bermanfaat dan dapat memberikan informasi
                            yang baik dan benar kondisi dari SMK Negeri 3 Bogor.</p>
                        <p>Salam</p>
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
                        <h2>Sejarah Singkat</h2>
                        <p>
                            Berdiri dan diresmikan pada tanggal 12 Juni 1980 dengan nama SMKK Negeri Bogor. Dalam
                            perkembangannya terus mengalami peningkatan dalam kualitas pengajaran, serta tenaga
                            pengajarnya. Menempati gedung berlantai 3, di atas lahan seluas ±1 Ha, terletak sangat
                            strategis di Jalan Raya Pajajaran Bogor sehingga SMK Negeri 3 Bogor mudah dijangkau dari
                            segala penjuru dengan sarana transportasi yang sangat mudah.
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
                        <p>Mewujudkan SMK Negeri 3 Bogor menjadi Sekolah yang Unggul dalam Prestasi Akademik dan
                            berwawasan Lingkungan</p>
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
                            keimanan, ketaqwaan, ilmu pengetahuan, keterampilan dengan prinsip belajar sepanjang hayat
                            serta mampu bersikap responsif dan adaptif terhadap perkembangan di era global</p>
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
                        <h2>Pendidik dan Tenaga Kependidikan</h2>

                        <hr>
                        <p><b>Koordinator dan Ketua Kompetensi Keahlian:</b></p>
                        <ol>
                            <li>
                                <p><b>Koordinator Bimbingan dan Konseling </b>: Melly Setyo Budi Astuti, S.Pd</p>
                            </li>
                            <li>
                                <p><b>Koordinator Pendidikan Lingkungan Hidup </b>: Rus Nuryana, S.Pd</p>
                            </li>
                            <li>
                                <p><b> Koordinator Guru Normatif Adaptif </b>: Damanhuri, S.Ag</p>
                            </li>
                            <li>
                                <p><b>Koordinator Bursa Kerja Khusus </b>: Made Sumiati, M.Pd</p>
                            </li>
                            <li>
                                <p><b>Ketua Komp. Keahlian Jasa Boga </b> : Elfi Yulviani Luthfi, S.Pd</p>
                            </li>
                            <li>
                                <p><b>Ketua Komp. Keahlian Tata Busana </b>: Dra. Neni Triana</p>
                            </li>
                            <li>
                                <p><b> Ketua Komp. Keahlian Tata Kecantikan Kulit dan Rambut </b> : Hj. Diah Winarti,
                                    M.Pd</p>
                            </li>
                            <li>
                                <p><b>Ketua Komp. Keahlian Akomodasi Perhotelan </b>: Rita Rosita, S.Pd</p>
                            </li>
                            <li>
                                <p><b>Ketua Komp. Keahlian Teknik Komputer Jaringan </b> : Ade Sofyan, S.Kom.</p>
                            </li>
                            <li>
                                <p><b> Koordinator Perpustakaan</b> : Utami Dri Astuti, M.Pd</p>
                            </li>
                        </ol>
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
                        <p><b>Kepala Sekolah</b> :Tatang Komarudin, S.Pd. MM</p>
                        <p><b>Wakil Manajemen Mutu</b> : Indah Retnowati, M.Pd</p>
                        <p><b>Wakasek Urusan Kurikulum</b> : Ristanti Anistya, S.Pd</p>
                        <p><b>Wakasek Urusan Hubungan Industri/Masyarakat</b> : Meinita Dwi Sulistian, SST.Par</p>
                        <p><b>Wakasek Urusan Sarana Prasana</b> : Dwi Atmojo, M.Pd</p>
                        <p>
                            <b>Wakasek Urusan Kesiswaan</b> : Ade Sugiawan, S.Pd
                        </p>
                        <p><b>Wakasek Urusan Kesiswaan</b> : Nendeh Rodiah, S.Pd</p>
                        <p><b>Wakasek Urusan Kesiswaan</b> : Hilman Aditya, S.Kom</p>
                        <p><b>Staf Wakasek Kurikulum Bidang Peningkatan Sumber Daya Manusia</b> : Iriyanti, M.Pd</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, alias recusandae. Sequi, rem. Unde quidem ad atque, ipsum commodi nihil, asperiores optio excepturi omnis ex, voluptatum tenetur ducimus adipisci aliquid! Perspiciatis saepe veritatis voluptates nisi sequi similique molestias sapiente iusto ipsum non natus rerum, rem incidunt? Ab omnis excepturi consequatur. Necessitatibus labore placeat aperiam distinctio alias saepe molestiae error aspernatur quam enim, illo hic eveniet iure doloremque odit totam ea?</p>
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
                        <p>
                            Menempati Lokasi Seluas : 9675 m2 dan Luas Bangunan 5072 m2
                            Gedung Utama : Terdiri dari 3 Lantai, Gedung Ruang Teori Terdiri dari 3 Lantai ditambah
                            Gedung lain yang Rata-rata terdiri dari 2 Lantai.
                        </p>
                        <p>
                            <b>A: Gedung Utama:</b>
                        <p>Lt.1 : Lobby, Restoran, UKS, BKK, Sanggar</p>
                        <p>Lt. 2 : R. Kepala sekolah, TU, Waka, R, Praktik Komputer</p>
                        <p>Lt. 3 : Aula, Stodio Musik</p>
                        </p>
                        <hr>
                        <p>
                            <b>B : Gedung :</b>
                        <p>Lt. 1. R. Teori , Toko Kop. Bisnis Center, Foto Copy, Coffee Shop</p>
                        <p>Lt. 2 : Kamar Hotel (tahap Pembangunan)</p>
                        </p>
                        <hr>
                        <p>
                            <b>C : Model Hotel</b>
                        <p>Lt. 1 : Office</p>
                        <p>Lt. 2 : Meeting Room</p>
                        </p>
                        <hr>
                        <p>
                            <b>D :</b>
                        <p>Lt 1 : R.OSIS, R.Praktik Patiseri</p>
                        <p>Lt. 2: R. Praktik Busana</p>
                        </p>
                        <hr>
                        <p>
                            <b>E :</b>
                        <p>Lt. 1 :R. Produksi JB, R. Praktik / Teori</p>
                        <p>Lt. 2 : R. Praktik Busana, R, Teori</p>
                        </p>
                        <hr>
                        <p>
                            <b>F : R. Praktik Jasa Boga</b>
                        </p>
                        <hr>
                        <p>
                            <b>G :</b>
                        <p>Lt.1 :R. Teori/R. Guru/Perpustakaan/R. Teori</p>
                        <p>Lt.2 : R. Teori</p>
                        <p>Lt.3 : R. Teori</p>
                        </p>
                        <hr>
                        <p>
                            <b>H : R</b>
                        <p>Lt. 1: R. Praktik Kecantikan & Teori Kulit</p>
                        <p>Lt. 2 : R. Teori</p>
                        </p>
                        <p>
                            <b>I : </b>
                        <p>Lt. 1: Loundry</p>
                        <p>Lt. 2: R. Praktik Kecantikan Rambut</p>
                        </p>
                        <hr>
                        <p>
                            <b>J : </b>
                        <p>Lt. 1: R. Praktik Boga Dasar</p>
                        <p>Lt. 2: R. Praktik TKJ</p>
                        </p>
                        <hr>
                        <p><b>K : Tower Air</b></p>
                        <hr>
                        <p>
                            <b>L : </b>
                        <p>Lt. 1: Kantin</p>
                        <p>Lt. 2: Masjid</p>
                        </p>
                        <hr>
                        <p><b>M : R. BP/BKK</b></p>
                        <hr>
                        <p><b>N : Gudang</b></p>
                        <hr>
                        <p><b>O : Pos Satpam</b></p>
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
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo cupiditate quia nihil illo et? Tenetur tempora esse porro ullam cupiditate blanditiis incidunt ea, odit iste aliquam at id explicabo sunt, itaque dicta doloremque magnam earum enim? Architecto, nesciunt aspernatur error reiciendis, necessitatibus temporibus laboriosam tempore soluta sapiente provident deleniti eveniet?</p>
                    </div>
                </div>
            </div>
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
@endsection
