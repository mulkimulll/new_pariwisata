<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History_boking extends Model
{
    use HasFactory;
    protected $table = "histori_boking";
    protected $fillable = ['id_wisata','id_partner','nama','id_boking','status','nama','tgl_boking'];
}
