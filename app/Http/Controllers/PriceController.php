<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    //
    public function getPrice() {
        $prices = Price::all();
        $temp = $prices[0];
        $prices[0] = $prices[3];
        $prices[3] = $temp;
 
        return view('price', compact('prices'));
    }

    public function getPriceChange() {
        $prices = Price::all();
   
        return view('price_change', compact('prices'));

    }

    public function changePrice(Request $request) {
        $rawQuery = "
        INSERT INTO railway.price (id, name, ban_ra, mua_vao) 
        VALUES 
        (1, '" . $request->name1 . "', '" . $request->ban_ra1 . "', '" . $request->mua_vao1 . "'),
        (2, '" . $request->name2 . "', '" . $request->ban_ra2 . "', '" . $request->mua_vao2 . "'),
        (3, '" . $request->name3 . "', '" . $request->ban_ra3 . "', '" . $request->mua_vao3 . "'),
        (4, '" . $request->name4 . "', '" . $request->ban_ra4 . "', '" . $request->mua_vao4 . "'),
        (5, '" . $request->name5 . "', '" . $request->ban_ra5 . "', '" . $request->mua_vao5 . "'),
        (7, '" . $request->name7 . "', '" . $request->ban_ra7 . "', '" . $request->mua_vao7 . "'),
        (8, '" . $request->name8 . "', '" . $request->ban_ra8 . "', '" . $request->mua_vao8 . "') as t
        ON DUPLICATE KEY UPDATE id=t.id,
        name=t.name,
        mua_vao=t.mua_vao,
        ban_ra=t.ban_ra;
        ";
        DB::statement($rawQuery);
        return redirect()->route('change');
    }
}
