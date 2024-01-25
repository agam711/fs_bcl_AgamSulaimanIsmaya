<?php

namespace App\Http\Controllers\Armada;

use App\Http\Controllers\Controller;
use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaViewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view ('armadaView', 
        ['armadas' => Armada::latest('id')->paginate(5)]);
    }
}
