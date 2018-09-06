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
use App\Syshotel;
use App\Travel;
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
        return view('airlineticket', $data);
    }

    public function saveairline(Request $req)
    {
        $userId                        = Auth::user()->id;
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
        return view('dropticket', $data);
    }

    public function savedrop(Request $req)
    {
        $userId                     = Auth::user()->id;
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
        return view('travelticket', $data);
    }

    public function savetravel(Request $req)
    {
        $userId                       = Auth::user()->id;
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
        return view('hotelticket', $data);
    }

    public function savehotel(Request $req)
    {
        $userId                  = Auth::user()->id;
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
        return view('rentalticket', $data);
    }

    public function saverental(Request $req)
    {
        $userId                       = Auth::user()->id;
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
        return view('paketticket', $data);
    }

    public function savepaket(Request $req)
    {
        $userId                       = Auth::user()->id;
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


    private function cleanNumeric($a)
    {
        $a = str_replace(',', '', $a);
        return $a;
    }
}
