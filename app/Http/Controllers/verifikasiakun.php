<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;

class verifikasiakun extends Controller
{
    public function index(){
        $customers = User::where('role',0)->get();
        return view('ADMIN.verifikasiakun',compact('customers'));
    }

    public function update(Request $request, $user_id){
        $update = User::find($user_id);
        $update->keterangan = $request->keterangan;
        $update -> save();
        return redirect('verifikasiakun');         

    }

    public function delete($user_id){
        $deletecustomer = User::find($user_id);
        if( $deletecustomer->delete()){
           return redirect()->back();
        }
}
}