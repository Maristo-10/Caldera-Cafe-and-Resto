<?php

namespace App\Http\Controllers;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editeventt extends Controller
{    
    public function editeventt(){
        $events = DB::table('event')->get();
        return view('ADMIN/editevent',['events' => $events]);
    }
    public function tambah(){
        return view('admin.eventform');
}



public function tampil($event_id){
    $update = event::find($event_id);
    return view('ADMIN.eventform',compact('update'));
}

public function update(request $request, $event_id){
    $update = event::find($event_id);
        $file = $update->gambar;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images/imageEvent',$file);
            $update->gambar = $file;
        }   
        $update->event_nama= $request->event_nama;
        $update->gambar = $file;
        $update->event_deskripsi = $request->event_deskripsi;
        $update -> save();
       
        return redirect('/editevent');         

    }
    public function delete($event_id){
        $deleteevent = event::find($event_id);
         if($deleteevent->delete()){}
           return redirect()->back();
    }

    public function tambahevent(){
        return view('ADMIN.tambahevent');
    }
    
    public function store(Request $request){
        $events = new event();
        $events->event_nama = $request->event_nama;
        $events->event_deskripsi = $request->event_deskripsi;
        if ($request->hasFile('gambar')){
            $file= $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move('images/imageEvent',$file);
            $events->gambar = $file;
        } 
        $events->gambar =$file;
        $events -> save();
        return redirect('editevent');
    }
}