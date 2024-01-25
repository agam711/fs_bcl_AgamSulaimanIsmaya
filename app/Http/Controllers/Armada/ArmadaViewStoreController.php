<?php

namespace App\Http\Controllers\Armada;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArmadaViewStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('armadaStore');
    }
}
