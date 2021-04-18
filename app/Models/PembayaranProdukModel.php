<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranProdukModel extends Model
{
    use HasFactory;
    protected $table		= 'pembayaran_produk'; //nama tabel
    protected $primaryKey 	= 'id_pembayaran_produk' //primary key
    protected $fillable		= ['id_pp', 'bukti_tf', 'status']; //field 
}
