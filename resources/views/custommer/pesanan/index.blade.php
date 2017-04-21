@extends('masterCustomer')
@section('content')
<div class="col-md-12">
            <div class="card">
              <h1>Daftar Pesanan Ticket Anda</h1>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>Jenis Pesawat</th>
                            <th>Berangkat Dari</th>
                            <th>Tujuan</th>
                            <th>Quantity</th>
                            <th>Total Harga</th>
                        </thead>
                        <tbody>
                            @foreach($order as $ord)
                            <tr>
                                <td></td>
                                <td>{{$ord->jenis_pesawat}}</td>
                                <td>{{$ord->berangkat_dari}}</td>
                                <td>{{$ord->tujuan}}</td>
                                <td>{{$ord->quantity}}</td>
                                <td>{{$ord->total_harga}}</td>
                            </tr>
                            </form>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
