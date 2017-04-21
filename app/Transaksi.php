<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  protected $table = 'transaksi';
protected $fillable = ['jenis_pesawat','berangkat_dari','tujuan','quantity','total_harga','customer_username','ticket_id'];
}
