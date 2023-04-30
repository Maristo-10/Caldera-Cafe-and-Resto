<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbackmodel;
use Auth;

class customerFeedbackController extends Controller
{
    public function index(){
        return view('feedback');
    }

    public function store(Request $request){
        $feedback = new feedbackmodel();
        $feedback->cust_id =  Auth::user()->user_id;
        $feedback->subject = $request->input('subject');
        $feedback->deskripsi = $request->input('deskripsi');
        
        $feedback->save();
        
        return redirect('/');
    }

    
}
