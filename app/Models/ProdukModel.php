<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table		= 'produk'; //nama tabel
    protected $primaryKey 	= 'id_produk' //primary key
    protected $fillable		= ['id_klinik', 'nama_produk', 'jenis_produk', 'harga_produk', 'stok', 'gambar']; //field 
}
