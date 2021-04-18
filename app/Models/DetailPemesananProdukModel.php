<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesananProdukModel extends Model
{
    use HasFactory;
    protected $table		= 'detail_pemesanan_produk'; //nama tabel
    protected $primaryKey 	= 'id_detail_pp' //primary key
    protected $fillable		= ['id_pp', 'id_produk', 'jumlah', 'total']; //field 
}
