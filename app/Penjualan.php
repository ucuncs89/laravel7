<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['tgl_faktur','no_faktur','nama_konsumen','barang_id','jumlah','harga_satuan','harga_total'];
}
