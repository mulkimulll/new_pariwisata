<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    use HasFactory;
    protected $table = "transportasi";
    protected $fillable = ['jenis_transportasi','nama','biaya','trayek','jam_keberangkatan','jam_tiba','keterangan','gambar'];
}
