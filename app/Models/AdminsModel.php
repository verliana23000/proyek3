<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminsModel extends Model
{
    use HasFactory;
    protected $table		= 'admins'; //nama tabel
    protected $primaryKey 	= 'id_admin' //primary key
    protected $fillable		= ['nama', 'email', 'password', 'level']; //field  
}
