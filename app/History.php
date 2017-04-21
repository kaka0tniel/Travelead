<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  protected $table = 'history';
protected $fillable = ['jenis_pesawat','berangkat_dari','tujuan','quantity','total_harga','customer_username','ticket_id'];
}
