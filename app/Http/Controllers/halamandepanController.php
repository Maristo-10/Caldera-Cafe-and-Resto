<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feedbackmodel;
use Illuminate\Support\Facades\DB;

class halamandepanController extends Controller
{
    public function index(){
    $feedback = DB::table('feedback')
    ->join('users', 'feedback.cust_id','=','users.user_id')
    ->get();
    $feedback = feedbackmodel::inRandomOrder()->limit(4)->get();
    return view('index',compact('feedback'));
    }
    public function feedbackpage(){
        $feedback = DB::table('feedback')
        ->join('users', 'feedback.cust_id','=','users.user_id')
        ->get();
        $feedback = feedbackmodel::inRandomOrder()->limit(8)->get();
        return view('feedback',compact('feedback'));
        }
        


}
