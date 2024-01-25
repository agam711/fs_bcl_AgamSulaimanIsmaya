<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['armada_id', 'tgl_psn', 'berat_barang', 'detail_barang'];

    public function armada()
    {
        return $this->belongsTo(Armada::class);
    }
}
