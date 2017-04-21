<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ticket;
use App\transaksi;
use App\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class DaftarTicketController extends Controller
{



  public function show(Request $request){
  	/*	$key = Input::get('from');

          $query = $request->get('from');
          $hasil = Ticket::where('from', 'LIKE', '%' . $query . '%')->paginate(10);
  		return view('custommer.menu.index', compact('hasil', 'query'));
      */

      $key = $request->get('from');
      $key2= $request->get('destination');
      $key3= $request->get('planeName');

      /*$tickets = Ticket::where('from','LIKE','%'.$key.'%')->paginate(10);
      $tickets = Ticket::where('destination','LIKE','%'.$key2.'%')->paginate(10);
      $tickets = Ticket::where('planeName','LIKE','%'.$key3.'%')->paginate(10);*/

        $tickets = Ticket::where('from','LIKE','%'.$key.'%')->orWhere('destination','LIKE','%'.$key2.'%')->paginate(10);
      return view('custommer.cari', compact('tickets'));


  	}

    public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('rule:User');
  }



  public function create(Request $request){

    $ticket = Ticket::findOrFail($id);
    return view('custommer.create',compact('ticket'));
  }

  public function pesan($idm){
		$username = Auth::user()->username;
        $custommer = DB::table('users')->where('username' , $username)->first();
        $id = $custommer->id;
        $this->data['custommer'] = User::find($id);
        $this->data['ticket'] = Ticket::find($idm);
        $menu = DB::table('tickets')->where('id' , $idm)->first();
        	return view('custommer.pesan.index',$this->data);
	}

  public function pemesanan(Request $request){
		$input = $request->all();
		$customer = DB::table('users')->where('username' , $input['custommer_username'])->first();
		$order = DB::table('transaksi')->where('customer_username' , $input['custommer_username'])->get();
			Transaksi::create(['jenis_pesawat' => $input['jenis_pesawat'],'berangkat_dari' => $input['berangkat_dari'],'quantity' => $input['quantity'],'tujuan' => $input['tujuan'],'customer_username' => $input['custommer_username'],'ticket_id' => $input['ticket_id'],'total_harga' => $input['price']*$input['quantity']]);
		return redirect(url('/'))->with('info','Pemesanan berhasil dilakukan. Silahkan melanjutkan pemesanan atau melakukan konfirmasi pemesanan');
	}
  public function pesanan(){
  		$username = Auth::user()->username;
          $customer = DB::table('users')->where('username' , $username)->first();
          $id = $customer->id;
          $this->data['customer'] = User::find($id);
          $this->data['order'] = DB::table('transaksi')->where('customer_username' , $username)->orderBy('id','desc')->get();
  		return view('custommer.pesanan.index',$this->data);
  	}

    public function ticket_custommer(){
    		$username = Auth::user()->username;
            $customer = DB::table('users')->where('username' , $username)->first();
            $id = $customer->id;
            $this->data['customer'] = User::find($id);
            $this->data['order'] = DB::table('history')->where('customer_username' , $username)->orderBy('id','desc')->get();
    		return view('custommer.ticket_custommer.index',$this->data);
    	}

}
