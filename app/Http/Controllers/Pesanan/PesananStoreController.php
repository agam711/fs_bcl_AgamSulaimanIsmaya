<?php

namespace App\Http\Controllers\Pesanan;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        Pesanan::create([
            'armada_id' =>  request('armada_id'),
            'tgl_psn' =>  request('tgl_psn'),
            'berat_barang' =>  request('berat_barang'),
            'detail_barang' =>  request('detail_barang'),
        ]);
        return redirect()->back();
    }
}
