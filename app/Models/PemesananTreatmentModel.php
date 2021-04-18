<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananTreatmentModel extends Model
{
    use HasFactory;
    protected $table		= 'pemesanan_treatment'; //nama tabel
    protected $primaryKey 	= 'id_pt' //primary key
    protected $fillable		= ['id_member', 'id_klinik', 'nama_treatment', 'waktu', 'metode_pembayaran', 'ket_batal']; //field 
}
