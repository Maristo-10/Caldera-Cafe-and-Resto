<?php

namespace App\Http\Controllers;
use App\Models\general;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function blog(){
        $general_information = DB::table('general_information')->get();
        return view('blog',['general_information'=>$general_information]);
    }
    public function general(){
        $general = DB::table('general_information')->get();
        return view('ADMIN/editgeneral',['general'=>$general]);
    }
    public function tambah(){
        return view('admin.generalform');
}
public function tampil($info_id){
    $update = general::find($info_id);
    return view('ADMIN.generalform',compact('update'));
}
public function update(request $request, $info_id){
    $update = general::find($info_id);
        $file = $update->gambar;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images',$file);
            $update->gambar = $file;
        } 
        $update->info_nama= $request->info_nama;
        $update->gambar = $file;
        $update->info_deskripsi = $request->info_deskripsi;
        $update -> save();
       
        return redirect('/editgeneral');         

    }
    public function delete($info_id){
        $deleteproduks = general::find($info_id);
         $deleteproduks->delete();
           return redirect()->back();
    }
    public function tambahgeneral(){
        return view('ADMIN.tambahgeneral');
    }
    public function store(Request $request){
        $general = new general();
        $general->info_nama = $request->info_nama;
        $general->info_deskripsi = $request->info_deskripsi;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images',$file);
            $general->gambar = $file;
        } 
        $general->gambar =$file;
        $general -> save();
        return redirect('editgeneral');
        
    }

}
