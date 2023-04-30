<?php

namespace App\Http\Controllers;
use App\Models\menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Collection:links;

class menuController extends Controller
{
    public function menu(){
        $produk = DB::table('produk')->paginate(28);
        return view('menu',['produk' => $produk]);


    }
    public function index(Request $request){
        
        $produk = DB::table('produk')->where('nama','LIKE','%'.$request->cari.'%')->paginate(15);

        return view('menu',['produk' => $produk]);

        }
       
    public function tambah(){
        return view('ADMIN/tambahproduk');
    }


    public function store(Request $request){
        $produks = new menu();
        $produks->nama = $request->nama;
        $produks->harga = $request->harga;
        $produks->kategori = $request->kategori;

        $produks -> save();
        return redirect('/editproduk');
        
    }

    public function edit($id_produk){
        $editproduks = menu::find($id_produk);
       
        return view('ADMIN/editmenu',compact('editproduks'));
    }

    public function update(Request $request, $id_produk){
        $update = menu::find($id_produk);
        
        $update->nama= $request->nama;
        $update->harga = $request->harga;
        $update->kategori = $request->kategori;
        $update -> save();
       
        return redirect('/editproduk');         

    }

    public function delete($id_produk){
        $deleteproduks = menu::find($id_produk);
         if($deleteproduks->delete()){}
           return redirect()->back();
    }
  
    }





