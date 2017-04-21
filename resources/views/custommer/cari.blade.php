@extends('masterCustomer')
  @section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Pencarian Tiket Anda</div>
</div>

<div class="section">
  @if($tickets->count())
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-condensed tfix">
                <thead align="center">
                       <tr>
                           <td><b>Plane Name</b></td>
                           <td><b>From</b></td>
                           <td><b>Destination</b></td>
                           <td><b>Price</b></td>
                           <td><b>Action</b></td>

                       </tr>
                   </thead>
                   @foreach($tickets as $ticket)
                       <tr>
                           <td align="center"> {{ $ticket->planeName }} </td>
                           <td> {{ $ticket->from }} </td>
                           <td> {{ $ticket->destination }} </td>
                           <td> {{ $ticket->price }} </td>
                           <td>

                                  <a href="{{url('custommer/pesan',$ticket->id)}}" class="btn btn-primary">Pesan</a>




                           </td>

                       </tr>
                   @endforeach

                </table>
            </div>
            {!! $tickets->links() !!}

            @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Ticket tidak tersedia
                        </div>
                    @endif
@endsection
