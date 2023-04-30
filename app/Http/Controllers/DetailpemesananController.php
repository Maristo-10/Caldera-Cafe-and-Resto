<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailpemesananController extends Controller
{
    //
    public function index($order_id){
        $orderdetail = Orderdetail::find($order_id);
        $order = DB::table('order_detail')
        ->join('orders', 'orders.order_id','=','order_detail.order_id')
        ->join('produk', 'produk.id_produk','=','order_detail.id_produk')
        ->where('order_detail.order_id','=',$order_id)
        ->get();
        return view('ADMIN.detailpemesanan',compact('order','orderdetail'));
    }
}
