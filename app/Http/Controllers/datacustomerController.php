<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class datacustomerController extends Controller
{
    //
    public function index(){
        $user = User::where('role',0)->get();
        return view('ADMIN.datacustomer',compact('user'));
    }

    public function detail($user_id){
        $user = User::find($user_id);
        return view('ADMIN.detailcustomer',compact('user'));
    }
}
