<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class PesananViewStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $data = [
            'armada' => Armada::all(),
        ];
        return view('pesananStore', $data);
    }
}
