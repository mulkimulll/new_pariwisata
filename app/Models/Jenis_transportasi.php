<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_transportasi extends Model
{
    use HasFactory;
    protected $table = "jenis_transportasi";
    protected $fillable = ['nama'];
}
