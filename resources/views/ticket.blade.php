@extends('layouts.app')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Kategori</h1>
            <p class="text-muted m-0 desc">Halaman transaksi input tiket.</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">

            </div>
        </div>
    </div>
    <div class="content">
        <div class="row align-items-stretch app-switcher">
            <div class="col-lg-3 col-6 mb-4">
                <a href="{{url('ticket/airline')}}" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#f3533b;">airplanemode_active</span>
                            <p class="weight-400 m-0">Air Line</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="{{url('ticket/drop')}}" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#49e021;">airport_shuttle</span>
                            <p class="weight-400 m-0">Drop / Shuttle</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="{{url('ticket/travel')}}" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#21C3E0;">directions_car</span>
                            <p class="weight-400 m-0">Travel Reguler</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="{{url('ticket/hotel')}}" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#dde053;">hotel</span>
                            <p class="weight-400 m-0">Hotel</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="index.html" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#e07ed1;">directions_car</span>
                            <p class="weight-400 m-0">Rental</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="index.html" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#7b82e0;">directions_railway</span>
                            <p class="weight-400 m-0">KAI</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="index.html" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#e0980b;">directions_boat</span>
                            <p class="weight-400 m-0">PELNI</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-4">
                <a href="index.html" class="text-dark">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <span class="material-icons md-48 " style="color:#a7c3e0;">all_inbox</span>
                            <p class="weight-400 m-0">Paket Barang</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
