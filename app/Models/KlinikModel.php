<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlinikModel extends Model
{
    use HasFactory;
    protected $table		= 'klinik'; //nama tabel
    protected $primaryKey 	= 'id_klinik' //primary key
    protected $fillable		= ['nama_klinik', 'alamat', 'no_hp', 'deskripsi', 'logo']; //field 
}
