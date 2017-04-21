@extends('masterCustomer')
@section('content')
<div class="col-md-12">
            <div class="card">
              <h1>Ticket Anda</h1>
                <div class="content table-responsive table-full-width">
                  @foreach($order as $view)
                  <table>
                    <td>
                  <b>Kode Tiket</b> : {{ $view->id }}<br>
                  <b>Atas Nama</b> : {{ $view->customer_username }}<br>
                  <b>Jenis Pesawat</b> : {{ $view->jenis_pesawat }}<br>
                  <b>Berangkat Dari</b> : {{ $view->berangkat_dari }}<br>
                  <b>Tujuan</b> : {{ $view->tujuan }}<br>
                  <b>Total Harga</b> : {{ $view->total_harga }}<br>
                </td>
                  <hr>
                </table>
                  @endforeach
                </div>
                <br><br><br><br><br><br>
                <b> Note:</b> Tiket ini  dapat dicetak  dan dibawa kepada petugas pada saat check in.<hr>
                
                <p> Jika mengalami kendala, mohon hubungi Travelead.id di <b>021-00-000-000</b> atau email <b>cs@travelead.com</b>
            </div>
        </div>
@endsection
