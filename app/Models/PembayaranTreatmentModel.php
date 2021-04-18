<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranTreatmentModel extends Model
{
    use HasFactory;
    protected $table		= 'pembayaran_treatment'; //nama tabel
    protected $primaryKey 	= 'id_pembayaran_treatment' //primary key
    protected $fillable		= ['id_pt', 'bukti_tf', 'status']; //field 
}
