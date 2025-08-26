<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkmodel;      

class ProdukController extends Controller
{
     public function produk()
    {
        return view('produk');
    }

    public function tambahproduk()
    {
        return view('tambahproduk');
    }

    public function simpanproduk(Request $request)
    {
        $produk= Produkmodel::create([
            'nm_produk' => $request->nm_produk,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'jumlah' => $request->qty*$request->harga,
        ]);

        return redirect()->route('produk');
    }
}
