<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "wisata";
    protected $fillable = ['nama_wisata','kategori','idsub','alamat','keterangan','gambar','jam_buka','jam_tutup','harga'];
}
