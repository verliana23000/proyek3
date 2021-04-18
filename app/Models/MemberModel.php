<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table		= 'member'; //nama tabel
    protected $primaryKey 	= 'id_member' //primary key
    protected $fillable		= ['id_klinik', 'nama_member', 'ttl', 'jk', 'no_hp', 'email', 'password']; //field 
}
