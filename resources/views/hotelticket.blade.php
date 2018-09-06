@extends('layouts.app')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Hotel</h1>
            <p class="text-muted m-0 desc">Halaman transaksi tiket hotel.</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">
                
            </div>
        </div>
    </div>
    <div class="content">
        @if (\Session::has('success'))
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Data berhasil disimpan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="material-icons md-18">clear</span>
                    </button>
                </div>
            </div>
        </div>
        @endif
        <form class="needs-validation" method="POST" novalidate action="{{ URL('ticket/savehotel') }}">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="card ">
                    <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="system">Travel</label>
                                    <select name="system" class="form-control" required>
                                        @foreach($system as $dtSystem)
                                            <option value="{{$dtSystem->name}}">{{$dtSystem->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="hotel">Hotel</label>
                                    <input type="text" class="form-control" name="hotel" id="hotel" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="check_in">Check In</label>
                                    <input type="text" class="form-control date-picker" name="check_in" id="check_in" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="check_out">Check Out</label>
                                    <input type="text" class="form-control date-picker" name="check_out" id="check_out" required>
                                </div>
                            </div>

                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="phone">Telp</label>
                                <input type="text" class="form-control" name="phone" id="phone" required data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true">                                              
                            </div>
                            <div class="col-md-1 mb-3">
                                <label for="room">Room</label>
                                <input type="text" class="form-control" name="room" id="room" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2 mb-3">
                                <label for="on_ticket">On ticket</label>
                                <input type="text" class="form-control" name="on_ticket" id="on_ticket" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" required>                                              
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="nta">NTA</label>
                                <input type="text" class="form-control" name="nta" id="nta" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="commission">Commission</label>
                                <input type="text" class="form-control" name="commission" id="commission" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="payment">Payment</label>
                                <input type="text" class="form-control" name="payment" id="payment" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="notes">Notes</label>
                                <input type="text" class="form-control" name="notes" id="notes" required>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="sales">Sales</label>
                                <input type="text" class="form-control" name="sales" id="sales" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>
@endsection
@section('pages-css')
    <link href="{{mix('css/pages/hotelticket.css')}}" rel="stylesheet">
@stop
@section('pages-js')
    <script src="{{mix('js/pages/hotelticket.js')}}"></script>
@stop
