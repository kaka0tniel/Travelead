@extends('master')
  @section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        <h1>Crud Daftar Ticket</h1>
          <div class="panel panel-default">
            <div class="panel-body">
              @if(Session::has('alert-success'))
    					    <div class="alert alert-success">
    				            {{ Session::get('alert-success') }}
    				        </div>
    					@endif
                <a href="{{route('ticket.create')}}"class="btn btn-info pull-right">Create New Data</a><br><br>

              <!--  <table class="table table-striped">

                  <tr>
                    <td>No.<td>
                    <td>Plane Name<td>
                    <td>from<td>
                    <td>destination<td>
                    <td>price<td>
                    <thd>Stock </td>
                  </tr>
                  <?php $no=1;?>
                  @foreach($tickets as $ticket)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$ticket->planeName}}</td>
                    <td>{{$ticket->from}}</td>
                    <td>{{$ticket->destination}}</td>
                    <td>{{$ticket->price}}</td>
                    <td>{{$ticket->stock}}</td>
                    <td>
                        <from  method="post"  action="{{ route('ticket.destroy', $ticket->id)}}" accept-charset="UTF-8">
                            <input name="_method" type="hidden"  value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <a href="{{route('ticket.edit', $ticket->id)}}" class="btn btn-primary">Edit</a>
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </table>-->

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
                                   <from  method="post"  action="{{ route('ticket.destroy', $ticket->id)}}" accept-charset="UTF-8">
                                       <input name="_method" type="hidden"  value="DELETE">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{route('ticket.edit', $ticket->id)}}" class="btn btn-primary">Edit</a>
                                       <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
                                   </form>
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
