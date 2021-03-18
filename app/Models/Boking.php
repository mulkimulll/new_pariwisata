<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boking extends Model
{
    use HasFactory;
    protected $table = "boking";
    protected $fillable = ['nama_wisata','tgl_booking','kuota','create_user'];
}
