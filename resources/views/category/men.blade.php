@extends('layouts.main')

@section('container')

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

                        @foreach ($mens as $men)
                            <div class="col-sm-6 col-lg-4">
                                <div class="card card-sm">
                                    <!-- <a href="#" class="d-block"><img src="https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2020/04/09/663219154.png" class="card-img-top"></a> -->
                                    <a href="{{ url('produk/'.$men->slug) }}" class="d-block"><img src="img/{{ $men->photo }}" class="card-img-top"></a>
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
                        {{-- <div class="card" style="text-align: center;">
                            <div class="card-body">
                                <a href="/men">Lainnya</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection