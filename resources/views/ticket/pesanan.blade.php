@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Daftar Pesanan Ticket Custommer</h1>
          <div class="panel panel-default">
            <div class="panel-body">
              @if(Session::has('alert-success'))
    					    <div class="alert alert-success">
    				            {{ Session::get('alert-success') }}
    				        </div>
    					@endif


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-condensed tfix">
                    <thead align="center">
                           <tr>
                               <td><b>Jenis Pesawat</b></td>
                               <td><b>Berangkat Dari</b></td>
                               <td><b>Tujuan</b></td>
                               <td><b>Quantity</b></td>
                               <td><b>Total Harga</b></td>
                               <td><b>Custommer Username</b></td>
                               <td><b>Aksi</b></td>

                           </tr>
                       </thead>
                       @foreach($transaksi as $order)
                           <tr>
                               <td align="center"> {{ $order->jenis_pesawat }} </td>
                               <td> {{ $order->berangkat_dari }} </td>
                               <td> {{ $order->tujuan }} </td>
                               <td> {{ $order->quantity }} </td>
                               <td> {{ $order->total_harga }} </td>
                               <td> {{ $order->customer_username }} </td>
                               <td>
                                 <a href="{{url('pemesanan/konfirmasi',$order->id)}}" class="btn btn-info">Konfirmasi</a>
                                  <a href="{{url('pemesanan/batal',$order->id)}}" class="btn btn-danger">Tolak Pesanan</a>
                               </td>

                           </tr>
                       @endforeach

                    </table>
                </div>

              </div>
            </div>
          </div>
        </div>
</div>
@endsection
