<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ticket;
use App\transaksi;
use App\history;
use Illuminate\Support\Facades\DB;


class TicketController extends Controller
{
      public function index(){
        $tickets = Ticket::all();
        return view('ticket.ticket',['tickets' =>$tickets]);
      }

      public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('rule:Admin');
    }

      public function create(){
        return view('ticket.create');
      }

      public function store(Request $request)
      {
        $this->validate($request,[
          'planeName'=>'required',
          'from'=>'required',
          'destination'=>'required',
          'price'=>'required',
          'stock'=>'required',
        ]);

        $ticket = new Ticket;
        $ticket->planeName = $request->planeName;
        $ticket->from = $request->from;
        $ticket->destination = $request->destination;
        $ticket->price = $request->price;
        $ticket->stock = $request->stock;
        $ticket->save();
        return redirect(url('ticket'))->with('alert-success','Data Hasbeen Saved!');
      }

      public function edit($id)
      {
        $ticket = Ticket::findOrFail($id);
        return view('ticket.edit',compact('ticket'));
      }

      public function destroy($id)
      {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
        Session::flash('msg','ticket '.$ticket->id.' Berhasil Dihapus');
        return redirect('/ticket');
      }

      public function update(Request $request, $id)
      {
        $this->validate($request,[
          'planeName'=>'required',
          'from'=>'required',
          'destination'=>'required',
          'price'=>'required',
          'stock'=>'required',
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->planeName=$request->planeName;
        $ticket->from=$request->from;
        $ticket->destination=$request->destination;
        $ticket->price=$request->price;
        $ticket->stock=$request->stock;
        $ticket->save();

        return redirect(url('ticket'))->with('alert-success','Data Hasbeen Updated!');
      }

      public function pemesanan(){
          $orders = Transaksi::all();
          return view('ticket.pesanan',['transaksi' =>$orders]);
      	}

        public function batal($id){
		transaksi::find($id)->delete();
		return redirect(url('/pemesanan'))->with('info','Pembatalan pemesanan berhasil dilakukan');
	}

  public function konfirmasi($id){
		$request = DB::table('transaksi')->where('id',$id)->first();
		$input1 = $request->jenis_pesawat;
		$input2 = $request->berangkat_dari;
    $input3 = $request->tujuan;
    $input4 = $request->quantity;
    $input5 = $request->total_harga;
    $input6 = $request->customer_username;
    $input7 = $request->ticket_id;
		History::create(['jenis_pesawat'=> $input1, 'berangkat_dari' => $input2,'tujuan'=> $input3,'quantity'=> $input4,'total_harga'=> $input5,'customer_username'=> $input6,'ticket_id'=> $input7]);
    $customer = DB::table('users')->where('username', $input2)->first();

		Transaksi::find($id)->delete();
		return redirect(url('/pemesanan'))->with('info','Konfirmasi pemesanan telah berhasil');
	}
}
