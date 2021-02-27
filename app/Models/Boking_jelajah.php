<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boking_jelajah extends Model
{
    use HasFactory;
    protected $table = "boking_jelajah";
    protected $fillable = ['nama_wisata','tgl_booking','kuota','create_user'];
}
