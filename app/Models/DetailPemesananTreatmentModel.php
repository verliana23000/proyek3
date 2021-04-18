<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesananTreatmentModel extends Model
{
    use HasFactory;
    protected $table		= 'detail_pemesanan_treatment'; //nama tabel
    protected $primaryKey 	= 'id_detail_pt' //primary key
    protected $fillable		= ['id_pt', 'id_treatment', 'jumlah', 'total']; //field 
}
