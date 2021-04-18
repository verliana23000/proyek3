<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananProdukModel extends Model
{
    use HasFactory;
    protected $table		= 'pemesanan_produk'; //nama tabel
    protected $primaryKey 	= 'id_pp' //primary key
    protected $fillable		= ['id_member', 'id_klinik', 'nama_produk', 'waktu', 'metode_pembayaran', 'ket_batal']; //field 
}
