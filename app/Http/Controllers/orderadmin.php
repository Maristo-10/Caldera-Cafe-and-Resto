<?php

namespace App\Http\Controllers;
use App\Models\Orders;
use App\Models\Orderdetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class orderadmin extends Controller
{
    public function index(){
        $order = DB::table('orders')
        ->join('users', 'orders.cust_id','=','users.user_id')
        ->select('orders.*','users.name')
        ->get();

        return view('ADMIN.daftarorder',compact('order'));
    }

    public function update(Request $request, $order_id){
        $update = Orders::find($order_id);
        $update->keterangan = $request->keterangan;
        $update -> save();
        return redirect()->back();         
            
    }
}