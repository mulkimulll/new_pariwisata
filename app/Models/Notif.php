<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notif extends Model
{
    use HasFactory;
    protected $table = "notif";
    protected $fillable = ['id_partner','isi','id_user','id_wisata'];
}
