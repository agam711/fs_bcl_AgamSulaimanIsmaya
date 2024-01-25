<?php

namespace App\Http\Controllers\Armada;

use App\Http\Controllers\Controller;
use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        Armada::create([
            'jenis_kendaraan' =>  request('jenis_kendaraan'),
            'kapasitas' =>  request('kapasitas'),
        ]);
        return redirect()->back();
    }   
    
}
