<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntrianModel extends Model
{
    use HasFactory;
    protected $table		= 'antrian'; //nama tabel
    protected $primaryKey 	= 'id_antrian' //primary key
    protected $fillable		= ['id_member', 'jenis_antrian', 'nama_member', 'no_telp', 'no_antrian', 'waktu']; //field 

}
