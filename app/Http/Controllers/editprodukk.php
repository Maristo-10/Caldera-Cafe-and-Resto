<?php

namespace App\Http\Controllers;
use App\Models\editproduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class editprodukk extends Controller
{
    public function editprodukk(){
        $produk = DB::table('produk')->get();
        return view('ADMIN/editproduk',['produk' => $produk]);
    }
}
