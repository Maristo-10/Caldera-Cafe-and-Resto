<?php

namespace App\Http\Controllers;
use App\Models\event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class about extends Controller
{
    public function about(){
        $event = event::limit(2)->get();
        return view('about',compact('event'));
    } 
}
