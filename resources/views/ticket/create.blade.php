@extends('master')
  @section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Crud Daftar Ticket</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <form class="" action="{{route('ticket.store')}}" method="post">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('planeName'))? $errors->first('planeName'):''}}">
        <select name="planeName">
        <option value="">Pilih Maskapai Penerbangan</option>
        <option value="Garuda">Garuda</option>
        <option value="Sriwijaya">Sriwijaya</option>
        <option value="Air Asia">air Asia</option>
        <option value="Citilink">Citilink</option>
        <option value="Wings Air">Wings Air</option>
        <option value="Lion Air">Lion Air</option>
        </select>
        <input type="submit" name="enter" value="Enter">
        {!! $errors->first('planeName','<p class="help-block">:message</p>')!!}
      </div>
      <div class="form-group{{ ($errors->has('from'))? $errors->first('from'):''}}">
        <input type="text" name="from" class="form-control" placeholder="Enter from Here">
        {!! $errors->first('from','<p class="help-block">:message</p>')!!}
      </div>
      <div class="form-group{{ ($errors->has('destination'))? $errors->first('destination'):''}}">
        <input type="text" name="destination" class="form-control" placeholder="Enter destination Here">
        {!! $errors->first('destination','<p class="help-block">:message</p>')!!}
      </div>
      <div class="form-group{{ ($errors->has('price'))? $errors->first('price'):''}}">
        <input type="text" name="price" class="form-control" placeholder="Enter price Here">
        {!! $errors->first('price','<p class="help-block">:message</p>')!!}
      </div>
      <div class="form-group{{ ($errors->has('stock'))? $errors->first('stock'):''}}">
        <input type="text" name="stock" class="form-control" placeholder="Enter stock Here">
        {!! $errors->first('stock','<p class="help-block">:message</p>')!!}
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="save">
      </div>
    </form>
  </div>
</div>






@stop
