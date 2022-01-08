@extends('layouts.main')

{{-- @dd($produks) --}}

@section('container')
        
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="" src="https://img.era.id/N_gmQ0pRGFpWHeUgv5tCEfpvUBGhW5OOi_QM5snA0PM/rs:fill:1280:720/g:sm/bG9jYWw6Ly8vcHVibGlzaGVycy8zNzY0My8yMDIwMDkxMTA5MzUtbWFpbi5jcm9wcGVkXzE1OTk3OTE3OTYuY3JvcHBlZF8xNTk5NzkxODQxLnBuZw.jpg">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="https://jadiberita.com/wp-content/uploads/2015/06/Wah-Ternyata-Dua-Gunung-Yang-Sering-Digambar-Anak-SD-Betul-betul-Ada.jpg">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt="" src="https://miro.medium.com/max/460/1*-AOyHzkEcdl3dCMil3EggQ.jpeg">
                                    <div class="carousel-item-background d-none d-md-block"></div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Slide label</h3>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-captions" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-captions" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    {{-- <?php foreach ($produkHome as $produk):?>
                    <div class="col-md-6">
                        <img src="img/<?= $produk['image']?>" class="rounded float-right" alt="...">
                    </div>
                    <?php endforeach?> --}}
                    <div class="col-md-6">
                        <img src="https://miro.medium.com/max/460/1*-AOyHzkEcdl3dCMil3EggQ.jpeg" class="rounded float-right" alt="...">
                    </div>
                    <div class="col-md-6">
                        <img src="https://miro.medium.com/max/460/1*-AOyHzkEcdl3dCMil3EggQ.jpeg" class="rounded float-right" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cards mt-4">
            <div class="col-md-6 col-xl-4">
                <div class="">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Download SVG icon from http://tabler-icons.io/i/truck-delivery -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="7" cy="17" r="2" />
                                    <circle cx="17" cy="17" r="2" />
                                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                    <line x1="3" y1="9" x2="7" y2="9" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Gratis Ongkir
                                    </div>
                                    <div class="text-muted">
                                        Untuk semua pembelian diatas Rp300.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Download SVG icon from http://tabler-icons.io/i/refresh -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <div class="font-weight-medium">
                                        30 hari pengembalian
                                    </div>
                                    <div class="text-muted">
                                        Dapat ditukar dalam waktu 30 hari
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Download SVG icon from http://tabler-icons.io/i/phone -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Layanan 24/7
                                </div>
                                <div class="text-muted">
                                    Hubungi kami 24 jam sehari
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-card mt-4">
            <div class="col-md-12">
                <div class="mr-3">
                    <div class="card-header">
                        <h3 class="card-title">
                            MENS
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container-xl">
                            <div class="row row-cards">

                                <!-- perulangan menampilkan data dari databse -->
                                @foreach ($mens as $men)
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card card-sm">
                                            <!-- <a href="#" class="d-block"><img src="https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2020/04/09/663219154.png" class="card-img-top"></a> -->
                                            <a href="#" class="d-block"><img src="img/{{ $men->photo }}" class="card-img-top"></a>
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>{{ $men->nama }}</div>
                                                        <div class="text-muted">{{ $men->harga }}</div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="#" class="text-muted">
                                                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                            </svg>
                                                            5.0
                                                        </a>
                                                        <a href="#" class="ms-3 text-muted">
                                                            terjual 120
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                <div class="card" style="text-align: center;">
                                    <div class="card-body">
                                        <a href="#">Lainnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-card mt-4">
            <div class="col-md-12">
                <div class="mr-3">
                    <div class="card-header">
                        <h3 class="card-title">
                            WOMENS
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container-xl">
                            <div class="row row-cards">

                                
                                @foreach ($womens as $women )
                                    
                                
                                <div class="col-sm-6 col-lg-4">
                                    <div class="card card-sm">
                                        <a href="#" class="d-block"><img src="img/{{ $women->photo }}" class="card-img-top"></a>
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div>{{ $women->nama }}</div>
                                                    <div class="text-muted">Rp 205.000</div>
                                                </div>
                                                <div class="ms-auto">
                                                    <a href="#" class="text-muted">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                        5.0
                                                    </a>
                                                    <a href="#" class="ms-3 text-muted">
                                                        Harga : {{ $women->harga }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                                <div class="card" style="text-align: center;">
                                    <div class="card-body">
                                        <a href="#">Lainnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
