@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')


    <!-- section hero area -->
    <section id="hero-area">
        <div id="slider-hero-nav"></div>
        <div class="owl-carousel" id="slider-hero">
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="{{ url('frontend/assets/img/caro-1.jpg') }}" alt="">
                </div>
                <div class="slider-item-content">
                    {{-- <h2>Penerimaan Peserta Didik Baru TA 2020/2021 Telah dibuka!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, vel. Animi maiores, adipisci ea nemo
                        dicta ad consectetur tenetur quasi?</p> --}}
                    <button class="btn btn-primary">DAFTAR PPDB</button>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="{{ url('frontend/assets/img/caro-2.jpg') }}" alt="">
                </div>
                <div class="slider-item-content">
                    <h2>Penerimaan Peserta Didik Baru TA 2020/2021 Telah dibuka!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, vel. Animi maiores, adipisci ea nemo
                        dicta ad consectetur tenetur quasi?</p>
                    <button class="btn btn-primary">DAFTAR PPDB</button>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section hero area -->

    <section id="sambutan">
        <div class="container">
            <h2>PROFILE SMA AL-IHSAN CIMENCRANG</h2>
            <div class="row">

                <div class="col-md-6">

                    <div class="video-wrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/H7lij1-TkBk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 pl-4">
                    <h3>Sambutan Kepala Sekolah</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium earum eum
                        eos iusto distinctio qui fuga autem natus praesentium vero?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quas laborum minus vitae ipsa
                        magni dicta. Obcaecati ipsum quos provident ea, architecto excepturi eius in voluptates aperiam
                        ratione officiis unde?
                    </p>
                    <a href="" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <section id="prestasi">
        <div class="container">
            <div class="section-title">
                <h2>Prestasi Terbaru</h2>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6 ">
                        <img class="section-item-thumbnail" src="{{ url('frontend/assets/img/dok-karate.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Medali Perak dalam olimpyade in Information di Pekanbaru</h3>

                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i>20 Agustus</span>
                                <span><i class="fas fa-map-marked-alt"></i>Pekanbaru</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A corrupti ab atque totam quis
                                explicabo rem nam iure tenetur quibusdam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col-md-6">
                        <img class="section-item-thumbnail" src="{{ url('frontend/assets/img/dok-olahraga.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-6 col-item-kanan">
                        <div class="section-item-title">
                            <h3>Medali Perak dalam olimpyade in Information di Pekanbaru</h3>
                            <div class="section-item-meta">
                                <span><i class="far fa-calendar-alt"></i>20 Agustus</span>
                                <span><i class="fas fa-map-marked-alt"></i>Pekanbaru</span>
                            </div>
                        </div>
                        <div class="section-item-body">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A corrupti ab atque totam quis
                                explicabo rem nam iure tenetur quibusdam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-selengkapnya">
                <a href="#" class="btn btn-more">Lihat Selengkapnya</a>
            </div>
        </div>
    </section>

    <section id="ekstrakulikuler">
        <div class="container">
            <div class="section-title">
                <h2>Ekstrakurikuler</h2>
            </div>
            <div class="section-body ekstrakurikuler-item">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="section-body-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="section-item-thumbnail"
                                        src="{{ url('frontend/assets/img/dok-karate.jpg') }}" alt=""
                                        width="100">
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana (Pramuka)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="section-body-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="section-item-thumbnail"
                                        src="{{ url('frontend/assets/img/dok-karate.jpg') }}" alt=""
                                        width="100">
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana (Pramuka)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="section-item-thumbnail"
                                        src="{{ url('frontend/assets/img/dok-karate.jpg') }}" alt=""
                                        width="100">
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana (Pramuka)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="section-item-thumbnail"
                                        src="{{ url('frontend/assets/img/dok-karate.jpg') }}" alt=""
                                        width="100">
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana (Pramuka)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="section-item-thumbnail"
                                        src="{{ url('frontend/assets/img/dok-karate.jpg') }}" alt=""
                                        width="100">
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana (Pramuka)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-body-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <img class="section-item-thumbnail"
                                        src="{{ url('frontend/assets/img/dok-karate.jpg') }}" alt=""
                                        width="100">
                                </div>
                                <div class="col-md-9">
                                    <h4>Praja Muda Karana (Pramuka)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tenaga pendidik -->
    <section id="tenaga-pendidik" class="top-section">
        <div class="container">
            <div class="section-title">
                <h2>Tenaga Pendidik</h2>
            </div>

            <div class="section-body">
                <div id="slider-tools-1"></div>
                <div class="owl-carousel" id="tenaga-pendidik-slider">
                    <div class="section-item-slider">
                        <a href=""><img class="foto-guru" src="{{ url('frontend/assets/img/guru1.jpg') }}"
                                alt=""></a>
                        <div class="section-item-caption">
                            <a href="">
                                <h5>Nama Guru</h5>
                            </a>
                            <h6>Bidang Studi</h6>
                        </div>

                    </div>
                    <div class="section-item-slider">
                        <a href=""><img class="foto-guru" src="{{ url('frontend/assets/img/guru1.jpg') }}"
                                alt=""></a>
                        <div class="section-item-caption">
                            <a href="">
                                <h5>Nama Guru</h5>
                            </a>
                            <h6>Bidang Studi</h6>
                        </div>
                    </div>

                    <div class="section-item-slider">
                        <img class="foto-guru" src="{{ url('frontend/assets/img/guru1.jpg') }}" alt="">
                        <div class="section-item-caption">
                            <h5>Nama Guru</h5>
                            <h6>Bidang Studi</h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="btn-selengkapnya mt-4">
                <a href="" class="btn btn-more">Guru Lainnya</a>

            </div>

        </div>
    </section>
    <!-- akhir tenaga pendidik -->

    <section id="alumni" class="top-section">
        <div class="container">
            <div class="section-title">
                <h2>Profil Alumni</h2>
            </div>
            <div class="section-body">
                <div id="slider-tools-2"></div>
                <div class="owl-carousel" id="alumni-slider">
                    <div class="section-item-slider">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ url('frontend/assets/img/alumni-1.jpeg') }}" class="foto-alumni"
                                    alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="section-item-content">
                                    <h3>Nama Alumni</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor dolores quasi
                                        fugiat odio, quas reprehenderit eum cum, sequi dolorem cupiditate non neque
                                        ipsam veritatis eligendi </p>
                                    <a href="" class="more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-item-slider">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ url('frontend/assets/img/alumni-1.jpeg') }}" class="foto-alumni"
                                    alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="section-item-content">
                                    <h3>Nama Alumni</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor dolores quasi
                                        fugiat odio, quas reprehenderit eum cum, sequi dolorem cupiditate non neque
                                        ipsam veritatis eligendi </p>
                                    <a href="" class="more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>

    <!-- galery -->
    <section id="gallery">
        <div class="container">
            <div class="section-title">
                <h2>Gallery / Dokumentasi</h2>
            </div>

            <div class="section-body">
                <div id="slider-tools-3"></div>
                <div class="owl-carousel" id="gallery-slider">
                    <div class="section-item-slider">
                        <img src="{{ url('frontend/assets/img/dok-karate.jpg') }}" class="gallery" alt="">
                        <div class="section-item-caption">
                            <h5>Nama Dokumentasi</h5>
                            <h6>Nama Tempat</h6>
                        </div>
                    </div>
                    <div class="section-item-slider">
                        <img src="{{ url('frontend/assets/img/alumni-1.jpeg') }}" class="gallery" alt="">
                        <div class="section-item-caption">
                            <h5>Nama Dokumentasi</h5>
                            <h6>Nama Tempat</h6>
                        </div>
                    </div>

                </div>
            </div>

            <div class="btn-selengkapnya mt-4">
                <a href="#" class="btn btn-more">Lihat Gallery lainnya</a>
            </div>
        </div>
    </section>
    <!-- akhir galery -->
@endsection
