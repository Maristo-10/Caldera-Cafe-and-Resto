<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\quantity;
use Illuminate\Support\Facades\DB;
use Auth;

class quantityController extends Controller
{
    public function index($id_produk){
        $produks = menu::find($id_produk);
        return view('quantity',compact('produks'));
    }

    public function store(Request $request){
        $quantity = new  quantity();
        $quantity->id_produk = $request->id_produk;
        $quantity->kuantitas = $request->kuantitas;
        $quantity->total_harga = $request->kuantitas * $request->harga;
        $quantity->cust_id   = auth()->id();
        $quantity->save();

        return redirect()->back();
    }
}
