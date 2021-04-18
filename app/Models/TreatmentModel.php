<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentModel extends Model
{
    use HasFactory;
    protected $table		= 'treatment'; //nama tabel
    protected $primaryKey 	= 'id_treatment' //primary key
    protected $fillable		= ['id_klinik', 'nama_treatment', 'jenis_treatment', 'harga_treatment', 'gambar']; //field 
}
