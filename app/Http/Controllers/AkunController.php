<?php

namespace App\Http\Controllers;
use App\Models\customer;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function store(Request $request){
        $registers = new customer();
        $registers->cust_nama = $request->name;
        $registers->cust_username = $request->username;
        $registers->cust_pass = $request->password;
        $registers->cust_gender = $request->gender;
        $registers->alamat = $request->address;
        $registers->cust_telp = $request->phone;

        $registers-> save();
        return redirect('/');
        
    }

    public function login(){
        return view('login');
    }
    public function loginCus(Request $request){
        $customer = customer::where('cust_username',$request->username)
        ->where('cust_pass',$request->password)
        ->where('ket_veri','Verifikasi')
        ->get();

        if(count($customer)!= 0){

            $data = $request->input();
            $request->session()->put('cust_username',$data['username']);
            $request->session()->put('id',$cust_id[0]->cust_id);
            
                  return redirect('/login');
        }else{
            return redirect('/');
        }
    }
    /*logout*/

    public function logout(request $request){
        $request->session()->forget('username');
        return redirect('/');
    }

    public function loginAdmin(Request $request){
        $customer = admin::where('admin_username',$request->username)
        ->where('cust_pass',$request->password)
        ->where('ket_veri','Verifikasi')
        ->get();

        if(count($admin) == 0){

            $data = $request->input();
            $request->session()->put('cust_username',$data['username']);
            $request->session()->put('id',$admin_id[0]->admin_id);
            
                  return redirect('/login');
        }else{
            return redirect('/editmenu');
        }
    }
}
