<?php

namespace App\Http\Controllers;

use App\Models\quantity;
use App\Models\Orders;
use App\Models\User;
use App\Models\Orderdetail;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ShopController extends Controller
{
    //
    public function index($id_checkout){
        $checkout = quantity::find($id_checkout);
        $pesan = DB::table('checkout')
        ->select('users.name as namauser','users.*','checkout.*','produk.*')
        ->join('users', 'checkout.cust_id','=','users.user_id')
        ->join('produk', 'produk.id_produk','=','checkout.id_produk')
        ->where('users.user_id','=',auth()->id())
        ->get();

        
        $bio =  quantity::inRandomOrder()->limit(1)
        ->select('users.name as namauser','users.*','checkout.*')
        ->join('users', 'checkout.cust_id','=','users.user_id')
        ->where('users.user_id','=',auth()->id())
        ->get();

         $join = DB::table('checkout')
        ->select(DB::raw('SUM(total_harga) as total')) 
        ->groupBy('cust_id')
        ->where('cust_id','=',Auth::user()->user_id)
        ->get();

     
        if(count($pesan) == 0){
            return redirect('/');
        } else {
            
            return view('shop',compact('pesan','bio','join'));
        }
   
        
    }

    public function delete($cust_id){
    
        $delete = quantity::where('cust_id',auth()->id());
            if( $delete->delete()){
                return redirect('/');
            }
  
    }

    public function store(Request $request){
        //                

        $checkout = quantity::where('cust_id',auth()->id())->get();

       
        $pemesanan= new Orders();
        $pemesanan->cust_id = auth()->id() ;
        $pemesanan->admin_id =  1;
        $pemesanan->alamat = $request->alamat;
        $pemesanan->total = $request->total;
        $pemesanan->keterangan = "Verifikasi";
        $file = $pemesanan->bukti_bayar;

        if ($request->hasFile('bukti_bayar')){
            $file= $request->file('bukti_bayar')->getClientOriginalName();
            $request->file('bukti_bayar')->move('buktibayar',$file);
            $pemesanan->bukti_bayar = $file;
        } 
        if( $pemesanan->save()){
            
            foreach($checkout as $checkouts){
                $orderdetail = new Orderdetail();
                $orderdetail->jumlah= $checkouts->kuantitas;
                $orderdetail->total_harga = $checkouts->total_harga;
                $orderdetail->id_produk = $checkouts->id_produk;
                $orderdetail->order_id = $pemesanan->order_id;
                $orderdetail->save();

            }  
            
            $deletecheckout = quantity::where('cust_id',auth()->id());
            if( $deletecheckout->delete()){
                return redirect('/menu');
            }
    }
        return redirect('/');

    }
}
