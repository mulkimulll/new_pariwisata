<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akomodasi extends Model
{
    use HasFactory;
    protected $table = "akomodasi";
    protected $fillable = ['nama','alamat','telp','bintang_hotel','harga','ket','create_user','gambar'];
}
