@extends('master')
  @section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Edit Daftar Ticket</h1>
    </div>
</div>
<div class="row">
  <form class="" action="{{route('ticket.update',$ticket->id)}}" method="post">
    <input name="_method" type="hidden" value="PATCH">
    {{csrf_field()}}
    <div class="form-group{{ ($errors->has('planeName'))? $errors->first('planeName'):''}}">
      <input type="text" name="planeName" class="form-control" placeholder="Enter Plane Name Here" value="{{$ticket->planeName}}">
      {!! $errors->first('planeName','<p class="help-block">:message</p>')!!}
    </div>
    <div class="form-group{{ ($errors->has('from'))? $errors->first('from'):''}}">
      <input type="text" name="from" class="form-control" placeholder="Enter from Here" value="{{$ticket->from}}">
      {!! $errors->first('from','<p class="help-block">:message</p>')!!}
    </div>
    <div class="form-group{{ ($errors->has('destination'))? $errors->first('destination'):''}}">
      <input type="text" name="destination" class="form-control" placeholder="Enter destination Here" value="{{$ticket->destination}}">
      {!! $errors->first('destination','<p class="help-block">:message</p>')!!}
    </div>
    <div class="form-group{{ ($errors->has('price'))? $errors->first('price'):''}}">
      <input type="text" name="price" class="form-control" placeholder="Enter price Here"value="{{$ticket->price}}">
      {!! $errors->first('price','<p class="help-block">:message</p>')!!}
    </div>
    <div class="form-group{{ ($errors->has('stock'))? $errors->first('stock'):''}}">
      <input type="text" name="stock" class="form-control" placeholder="Enter stock Here"value="{{$ticket->stock}}">
      {!! $errors->first('stock','<p class="help-block">:message</p>')!!}
    </div>
    <div>
      <input type="submit" class="btn btn-primary" value="save">
    </div>
  </form>
</div>

@stop
