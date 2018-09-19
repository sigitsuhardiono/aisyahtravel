<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Airlineticket;
use App\Drop;
use App\Dropticket;
use App\Hotelticket;
use App\Paket;
use App\Paketticket;
use App\Rental;
use App\Rentalticket;
use App\Sales;
use App\Shipticket;
use App\Syshotel;
use App\Train;
use App\Trainticket;
use App\Travel;
use App\TravelShip;
use App\Travelticket;
use Illuminate\Http\Request;
use \App\Catagorie;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagories         = Catagorie::get();
        $data["catagories"] = $catagories;
        return view('ticket', $data);
    }

    public function airline()
    {
        $data['airlines'] = Airline::all();
        $data['sales']    = Sales::all();
        return view('airlineticket', $data);
    }

    public function saveairline(Request $req)
    {
        $userId = Auth::user()->id;
        $bank   = "";
        if ($req->payment == "Debit" || $req->payment == "TT") {
            $bank = $req->gridRadios;
        }
        $agen   = "";
        if ($req->payment == "BB/Hutang") {
            $agen = $req->agen;
        }
        $airlineTicket                 = new Airlineticket();
        $airlineTicket->name           = $req->name;
        $airlineTicket->phone          = $req->phone;
        $airlineTicket->airline        = $req->airlines;
        $airlineTicket->route          = $req->route;
        $airlineTicket->date_departure = $req->date;
        $airlineTicket->pax            = $req->pax;
        $airlineTicket->booking_code   = $req->booking_code;
        $airlineTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $airlineTicket->nta            = $this->cleanNumeric($req->nta);
        $airlineTicket->commission     = $this->cleanNumeric($req->commission);
        $airlineTicket->payment        = $req->payment;
        $airlineTicket->bank           = $bank;
        $airlineTicket->agen           = $agen;
        $airlineTicket->notes          = $req->notes;
        $airlineTicket->sales          = $req->sales;
        $airlineTicket->user_id        = $userId;
        $airlineTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/airline');
    }

    public function drop()
    {
        $data['drop'] = Drop::all();
        $data['sales']    = Sales::all();
        return view('dropticket', $data);
    }

    public function savedrop(Request $req)
    {
        $userId                     = Auth::user()->id;
        $bank   = "";
        if ($req->payment == "Debit" || $req->payment == "TT") {
            $bank = $req->gridRadios;
        }
        $agen   = "";
        if ($req->payment == "BB/Hutang") {
            $agen = $req->agen;
        }
        $dropTicket                 = new Dropticket();
        $dropTicket->name           = $req->name;
        $dropTicket->phone          = $req->phone;
        $dropTicket->travel         = $req->travel;
        $dropTicket->address        = $req->address;
        $dropTicket->date_departure = $req->date;
        $dropTicket->pax            = $req->pax;
        $dropTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $dropTicket->nta            = $this->cleanNumeric($req->nta);
        $dropTicket->commission     = $this->cleanNumeric($req->commission);
        $dropTicket->payment        = $req->payment;
        $dropTicket->bank           = $bank;
        $dropTicket->agen           = $agen;
        $dropTicket->notes          = $req->notes;
        $dropTicket->sales          = $req->sales;
        $dropTicket->user_id        = $userId;
        $dropTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/drop');
    }

    public function travel()
    {
        $data['travel'] = Travel::all();
        $data['sales']    = Sales::all();
        return view('travelticket', $data);
    }

    public function savetravel(Request $req)
    {
        $userId                       = Auth::user()->id;
        $bank   = "";
        if ($req->payment == "Debit" || $req->payment == "TT") {
            $bank = $req->gridRadios;
        }
        $agen   = "";
        if ($req->payment == "BB/Hutang") {
            $agen = $req->agen;
        }
        $travelTicket                 = new Travelticket();
        $travelTicket->name           = $req->name;
        $travelTicket->phone          = $req->phone;
        $travelTicket->travel         = $req->travel;
        $travelTicket->address        = $req->address;
        $travelTicket->route          = $req->route;
        $travelTicket->date_departure = $req->date;
        $travelTicket->pax            = $req->pax;
        $travelTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $travelTicket->nta            = $this->cleanNumeric($req->nta);
        $travelTicket->commission     = $this->cleanNumeric($req->commission);
        $travelTicket->payment        = $req->payment;
        $travelTicket->bank           = $bank;
        $travelTicket->agen           = $agen;
        $travelTicket->notes          = $req->notes;
        $travelTicket->sales          = $req->sales;
        $travelTicket->user_id        = $userId;
        $travelTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/travel');
    }

    public function hotel()
    {
        $data['system'] = Syshotel::all();
        $data['sales']    = Sales::all();
        return view('hotelticket', $data);
    }

    public function savehotel(Request $req)
    {
        $userId                  = Auth::user()->id;
        $bank   = "";
        if ($req->payment == "Debit" || $req->payment == "TT") {
            $bank = $req->gridRadios;
        }
        $agen   = "";
        if ($req->payment == "BB/Hutang") {
            $agen = $req->agen;
        }
        $hotelTicket             = new Hotelticket();
        $hotelTicket->name       = $req->name;
        $hotelTicket->phone      = $req->phone;
        $hotelTicket->system     = $req->system;
        $hotelTicket->hotel      = $req->hotel;
        $hotelTicket->city       = $req->city;
        $hotelTicket->check_in   = $req->check_in;
        $hotelTicket->check_out  = $req->check_out;
        $hotelTicket->room       = $req->room;
        $hotelTicket->on_ticket  = $this->cleanNumeric($req->on_ticket);
        $hotelTicket->nta        = $this->cleanNumeric($req->nta);
        $hotelTicket->commission = $this->cleanNumeric($req->commission);
        $hotelTicket->payment    = $req->payment;
        $hotelTicket->bank           = $bank;
        $hotelTicket->agen           = $agen;
        $hotelTicket->notes      = $req->notes;
        $hotelTicket->sales      = $req->sales;
        $hotelTicket->user_id    = $userId;
        $hotelTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/hotel');
    }

    public function rental()
    {
        $data['rental'] = Rental::all();
        $data['sales']    = Sales::all();
        return view('rentalticket', $data);
    }

    public function saverental(Request $req)
    {
        $userId                       = Auth::user()->id;
        $bank   = "";
        if ($req->payment == "Debit" || $req->payment == "TT") {
            $bank = $req->gridRadios;
        }
        $agen   = "";
        if ($req->payment == "BB/Hutang") {
            $agen = $req->agen;
        }
        $rentalTicket                 = new Rentalticket();
        $rentalTicket->name           = $req->name;
        $rentalTicket->phone          = $req->phone;
        $rentalTicket->travel         = $req->travel;
        $rentalTicket->address        = $req->address;
        $rentalTicket->destination    = $req->destination;
        $rentalTicket->date_departure = $req->date;
        $rentalTicket->pax            = $req->pax;
        $rentalTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $rentalTicket->nta            = $this->cleanNumeric($req->nta);
        $rentalTicket->commission     = $this->cleanNumeric($req->commission);
        $rentalTicket->payment        = $req->payment;
        $rentalTicket->bank           = $bank;
        $rentalTicket->agen           = $agen;
        $rentalTicket->notes          = $req->notes;
        $rentalTicket->sales          = $req->sales;
        $rentalTicket->user_id        = $userId;
        $rentalTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/rental');
    }

    public function paket()
    {
        $data['paket'] = Paket::all();
        $data['sales']    = Sales::all();
        return view('paketticket', $data);
    }

    public function savepaket(Request $req)
    {
        $userId                      = Auth::user()->id;
        $paketTicket                 = new Paketticket();
        $paketTicket->name           = $req->name;
        $paketTicket->phone          = $req->phone;
        $paketTicket->travel         = $req->travel;
        $paketTicket->address        = $req->address;
        $paketTicket->destination    = $req->destination;
        $paketTicket->date_departure = $req->date;
        $paketTicket->pax            = $req->pax;
        $paketTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $paketTicket->nta            = $this->cleanNumeric($req->nta);
        $paketTicket->commission     = $this->cleanNumeric($req->commission);
        $paketTicket->payment        = $req->payment;
        $paketTicket->notes          = $req->notes;
        $paketTicket->sales          = $req->sales;
        $paketTicket->user_id        = $userId;
        $paketTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/paket');
    }

    public function kai()
    {
        $data['train'] = Train::all();
        $data['sales']    = Sales::all();
        return view('kaiticket', $data);
    }

    public function savekai(Request $req)
    {
        $userId                      = Auth::user()->id;
        $trainTicket                 = new Trainticket();
        $trainTicket->name           = $req->name;
        $trainTicket->phone          = $req->phone;
        $trainTicket->train          = $req->train;
        $trainTicket->route          = $req->route;
        $trainTicket->date_departure = $req->date;
        $trainTicket->pax            = $req->pax;
        $trainTicket->booking_code   = $req->booking_code;
        $trainTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $trainTicket->nta            = $this->cleanNumeric($req->nta);
        $trainTicket->commission     = $this->cleanNumeric($req->commission);
        $trainTicket->payment        = $req->payment;
        $trainTicket->notes          = $req->notes;
        $trainTicket->sales          = $req->sales;
        $trainTicket->user_id        = $userId;
        $trainTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/kai');
    }

    public function pelni()
    {
        $data['travel'] = TravelShip::all();
        $data['sales']    = Sales::all();
        return view('pelniticket', $data);
    }

    public function savepelni(Request $req)
    {
        $userId                     = Auth::user()->id;
        $shipTicket                 = new Shipticket();
        $shipTicket->name           = $req->name;
        $shipTicket->phone          = $req->phone;
        $shipTicket->travel         = $req->travel;
        $shipTicket->ship           = $req->ship;
        $shipTicket->route          = $req->route;
        $shipTicket->date_departure = $req->date;
        $shipTicket->pax            = $req->pax;
        $shipTicket->on_ticket      = $this->cleanNumeric($req->on_ticket);
        $shipTicket->nta            = $this->cleanNumeric($req->nta);
        $shipTicket->commission     = $this->cleanNumeric($req->commission);
        $shipTicket->payment        = $req->payment;
        $shipTicket->notes          = $req->notes;
        $shipTicket->sales          = $req->sales;
        $shipTicket->user_id        = $userId;
        $shipTicket->save();
        $req->session()->flash('success', 'Data has been added');
        return redirect('ticket/pelni');
    }

    private function cleanNumeric($a)
    {
        $a = str_replace(',', '', $a);
        return $a;
    }
}
