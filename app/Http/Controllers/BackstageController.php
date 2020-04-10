<?php

namespace App\Http\Controllers;

use App\Forfeit;
use App\History;
use Illuminate\Http\Request;

class BackstageController extends Controller
{
    public function backstage()
    {
        $customForfeits = Forfeit::whereIn('score', [2, 3, 39, 40])
            ->get();

        return view('backstage', ['customForfeits' => $customForfeits]);
    }

    public function store(Request $request)
    {
        $forfeit = Forfeit::find($request->score);
        $forfeit->description_fr = $request->description;
        $forfeit->save();

        $history = new History;
        $history->description = $request->description;
        $history->save();

        return redirect('/backstage');
    }
}
