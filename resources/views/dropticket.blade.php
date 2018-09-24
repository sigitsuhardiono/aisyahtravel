@extends('layouts.app')

@section('content')
    <div class="row page-tilte align-items-center">
        <div class="col-md-auto">
            <a href="#" class="mt-3 d-md-none float-right toggle-controls"><span class="material-icons">keyboard_arrow_down</span></a>
            <h1 class="weight-300 h3 title">Drop / Shuttle</h1>
            <p class="text-muted m-0 desc">Halaman transaksi tiket drop / shuttle.</p>
        </div>
        <div class="col controls-wrapper mt-3 mt-md-0 d-none d-md-block ">
            <div class="controls d-flex justify-content-center justify-content-md-end">

            </div>
        </div>
    </div>
    <div class="content">
        <div class="card ">
            <div class="card-header p-0">
                <ul class="nav nav-tabs active-thik nav-primary border-0" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link px-4 py-3 active rounded-0" id="home-tab" data-toggle="tab" href="#inputdata"
                           role="tab" aria-controls="home" aria-selected="true">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-3 rounded-0" id="profile-tab" data-toggle="tab" href="#listdata"
                           role="tab" aria-controls="profile" aria-selected="false">Data</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  show active" id="inputdata" role="tabpanel" aria-labelledby="home-tab">
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
                        <form class="needs-validation" method="POST" novalidate action="{{ URL('ticket/savedrop') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-lg-0">
                                    <div class="card ">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="col-md-2 mb-3">
                                                    <label for="travel">Travel</label>
                                                    <select name="travel" class="form-control" required>
                                                        @foreach($drop as $dtDrops)
                                                            <option value="{{$dtDrops->name}}">{{$dtDrops->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="address">Alamat</label>
                                                    <input type="text" class="form-control" name="address" id="address"
                                                           required>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="date">Tanggal</label>
                                                    <input type="text" class="form-control date-picker" name="date"
                                                           id="date" required>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5 mb-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           required>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="phone">Telp</label>
                                                    <input type="text" class="form-control" name="phone" id="phone"
                                                           required
                                                           data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true">
                                                </div>
                                                <div class="col-md-1 mb-3">
                                                    <label for="pax">Pax</label>
                                                    <input type="text" class="form-control" name="pax" id="pax"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2 mb-3">
                                                    <label for="on_ticket">On ticket</label>
                                                    <input type="text" class="form-control" name="on_ticket"
                                                           id="on_ticket"
                                                           data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true"
                                                           required>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="nta">NTA</label>
                                                    <input type="text" class="form-control" name="nta" id="nta"
                                                           data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true"
                                                           required>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="commission">Commission</label>
                                                    <input type="text" class="form-control" name="commission"
                                                           id="commission"
                                                           data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2 mb-3">
                                                    <label for="payment">Payment</label>
                                                    <select name="payment" id="payment" class="form-control" required>
                                                        <option value="">- Select Payment -</option>
                                                        <option value="BB/Hutang">BB/Hutang</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Debit">Debit</option>
                                                        <option value="TT">TT</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 mb-3" id="dataagen" style="display: none">
                                                    <label for="agen">Agen</label>
                                                    <input type="text" class="form-control" name="agen" id="agen">
                                                </div>
                                                <div class="col-sm-10" id="daftarbank" style="display: none">
                                                    <label for="namabank">&nbsp;</label>
                                                    <div class="form-check">
                                                        <div class="row">
                                                            <div class="col-md-1 mt-2">
                                                                <input class="form-check-input" type="radio"
                                                                       name="gridRadios" id="BCA" value="BCA"
                                                                       checked="">
                                                                <label class="form-check-label" for="BCA">
                                                                    BCA
                                                                </label>
                                                            </div>
                                                            <div class="col-md-1 mt-2">
                                                                <input class="form-check-input" type="radio"
                                                                       name="gridRadios" id="Mandiri" value="Mandiri">
                                                                <label class="form-check-label" for="Mandiri">
                                                                    Mandiri
                                                                </label>
                                                            </div>
                                                            <div class="col-md-1 mt-2">
                                                                <input class="form-check-input" type="radio"
                                                                       name="gridRadios" id="BRI" value="BRI">
                                                                <label class="form-check-label" for="BRI">
                                                                    BRI
                                                                </label>
                                                            </div>
                                                            <div class="col-md-1 mt-2">
                                                                <input class="form-check-input" type="radio"
                                                                       name="gridRadios" id="BNI" value="BNI">
                                                                <label class="form-check-label" for="BNI">
                                                                    BNI
                                                                </label>
                                                            </div>
                                                            <div class="col-md-1  mt-2">
                                                                <input class="form-check-input" type="radio"
                                                                       name="gridRadios" id="Mega" value="Mega">
                                                                <label class="form-check-label" for="Mega">
                                                                    Mega
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="notes">Notes</label>
                                                    <input type="text" class="form-control" name="notes" id="notes"
                                                           required>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="sales">Sales</label>
                                                    <select name="sales" class="form-control" required>
                                                        @foreach($sales as $dtSales)
                                                            <option value="{{$dtSales->id}}">{{$dtSales->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 offset-md-4">
                                                    <button type="submit" class="btn btn-primary btn-block">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="listdata" role="tabpanel" aria-labelledby="profile-tab">
                        <table id="datatable" class="table mb-4 responsive-table table-bordered bg-white">
                            <thead class="thead-light2">
                            <tr>
                                <th scope="col" width="1">#</th>
                                <th scope="col" class="resizeable">Name <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
                                <th scope="col" class="resizeable">Phone <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
                                <th scope="col" class="resizeable">Travel <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
                                <th scope="col" class="resizeable">Address <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
                                <th scope="col" class="resizeable">Date <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
                                <th scope="col" class="resizeable">Pax <span class="material-icons align-text-bottom ml-1 md-18">sort</span></th>
                                <th scope="col" width="1">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($datatable as $dtTicket)
                                <tr>
                                    <th data-label="No" scope="row">{{$i}}</th>
                                    <td data-label="Name"><a href="#" class="text-secondary">{{$dtTicket->name}}</a></td>
                                    <td data-label="First Name">{{$dtTicket->phone}}</td>
                                    <td data-label="Travel">{{$dtTicket->travel}}</td>
                                    <td data-label="Address">{{$dtTicket->address}}</td>
                                    <td data-label="Date">{{$dtTicket->date_departure}}</td>
                                    <td data-label="Pax">{{$dtTicket->pax}}</td>
                                    <td data-label="Actions" class="text-md-center dropdown dropleft">
                                        <a href="#" class="text-muted" id="actionDropdown" data-toggle="dropdown"><span class="material-icons md-20 align-middle">more_vert</span></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="actionDropdown">
                                            <a class="dropdown-item" href="{{ url('ticket/drop/delete') }}/{{$dtTicket->id}}">Delete Row</a>
                                            <a class="dropdown-item" href="#">Edit Row</a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('pages-css')
    <link href="{{mix('css/pages/dropticket.css')}}" rel="stylesheet">
@stop
@section('pages-js')
    <script src="{{mix('js/pages/dropticket.js')}}"></script>
@stop
