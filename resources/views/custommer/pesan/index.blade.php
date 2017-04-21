@extends('masterCustomer')
  @section('content')
  <div class="section">
  	<div class="card-panel purple darken-3 white-text">Form Pemesanan</div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="content table-responsive table-full-width">
                        <form action="{{url('custommer/pesan/pemesanan')}}" method="post">
                          {{ csrf_field() }}
                          <label class="col-md-4 control-label">Username Pemesan</label>
                              <input type="text" value="{{$custommer->username}}" class="form-control" name="custommer_username" readonly>
                          <label class="col-md-4 control-label">ID Ticket</label>
                              <input type="text" value="{{$ticket->id}}" class="form-control" name="ticket_id" readonly>
                          <label class="col-md-4 control-label">Jenis Pesawat</label>
                              <input type="text" value="{{$ticket->planeName}}" class="form-control" name="jenis_pesawat" readonly>
                          <label class="col-md-4 control-label">Berangkat dari</label>
          				            <input type="text" value="{{$ticket->from}}" class="form-control" name="berangkat_dari" readonly>
                          <label class="col-md-4 control-label">Tujuan</label>
          				            <input type="text" value="{{$ticket->destination}}" class="form-control" name="tujuan" readonly>
          				        <label class="col-md-4 control-label">Harga</label>
          				            <input type="number" value="{{$ticket->price}}" class="form-control" name="price" readonly>
                          <label class="col-md-4 control-label">Jumlah Pemesanan</label>
                              <input type="number" onkeyup="Harga(this.value)" min="1" class="form-control" name="quantity" required>
                          <label class="col-md-4 control-label">Total Harga</label>
                              <span class="form-control" id="total"></span>
                          <button type="submit" class="btn btn-danger">Beli</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>function Harga(str)
        {
        document.getElementById("total").innerHTML = str*{{$ticket->price}};
        return;
        }
</script>
@endsection
