<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;
    protected $fillable = ['kapasitas', 'status', 'jenis_kendaraan'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

}
