<?php

namespace App\Http\Controllers;
use App\Models\reservation;
use App\Models\reservation_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reservationadmin extends Controller
{
    public function reservationadmin(){
        $reservation = DB::table('reservation_order')
        // ->join('users', 'reservation_order.cust_id','=','users.user_id')
        // ->select('reservation_order.*','users.name','users.email','users.alamat','users.no_telepon')
        ->get();
        return view('ADMIN/editreservation',['reservation' => $reservation]);
    }
    public function delete($reservationorder_id){
        $deletereservation = reservation_order::find($reservationorder_id);
         if($deletereservation->delete()){}
           return redirect()->back();
    }
    public function tian(Request $request){
        $events = new reservation_order();
        $events->deskripsi = $request->deskripsi;
        $events->nama_custrev = $request->nama_custrev;
        $events->alamat_custrev = $request->alamat_custrev;
        $events->kategori_reservation = $request->kategori_reservation;
        $events->tanggal = $request->tanggal;
        $file = $events->bukti_bayar;
        if ($request->hasFile('bukti_bayar')){
            $file= $request->file('bukti_bayar')->getClientOriginalName();
            $request->file('bukti_bayar')->move('images',$file);
            $events->bukti_bayar = $file;
        } 
        $events->bukti_bayar =$file;
        $events -> save();
        return redirect('services');
    }
}
        