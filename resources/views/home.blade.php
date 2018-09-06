@extends('layouts.app')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Beranda</h1>
            <p class="text-muted m-0 desc">Use this page to create new pages.</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">Air Line</small>
                                <p class="m-0 weight-400">Rp 45,867,210.00</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-2"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">Drop / Shuttle</small>
                                <p class="m-0 weight-400">Rp 91,271,543.00</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-3"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">Travel Reguler</small>
                                <p class="m-0 weight-400">Rp 67,341,643.00</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-4"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">Hotel</small>
                                <p class="m-0 weight-400">Rp 59,182,921</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-5"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">Rental</small>
                                <p class="m-0 weight-400">Rp 21,182,921</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-6"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">KAI</small>
                                <p class="m-0 weight-400">Rp 45,132,921</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-7"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">PELNI</small>
                                <p class="m-0 weight-400">Rp 34,972,921</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-8"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card mb-sm-4 mb-3">
                <div class="card-body p-0">
                    <div class="p-3 pl-4">

                        <div class="media align-items-center">
                            <div class="media-body">
                                <small class="text-muted weight-300">Paket Barang</small>
                                <p class="m-0 weight-400">Rp 89,450,921</p>
                            </div>
                            <span class="dropdown">
                                      <a href="#" class="text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="material-icons">more_vert</span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Daily</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                      </div>
                                    </span>
                        </div>

                    </div>
                    <div>
                        <canvas id="chart-9"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="content"></div>
@endsection
@section('pages-css')
    <link href="{{mix('css/pages/home.css')}}" rel="stylesheet">
@stop
@section('pages-js')
    <script src="{{mix('js/pages/home.js')}}"></script>
@stop
