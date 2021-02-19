<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Kategori;

class KategoriTransformer extends TransformerAbstract
{
    public function transform(kategori $kategori) {
        return [
            'id' => $member->id,
            'nama' => $member->nama
        ];
    }
}