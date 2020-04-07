<?php

namespace App\Http\Controllers;

use App\Forfeit;
use App\Http\Resources\ForfeitResource;

class ForfeitController extends Controller
{
    /**
     * @param Forfeit $forfeit The forfeit injected model.
     *
     * @return ForfeitResource The forfeit resource.
     */
    public function show(Forfeit $forfeit): ForfeitResource
    {
        return new ForfeitResource($forfeit);
    }
}
