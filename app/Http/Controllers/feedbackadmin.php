<?php
namespace App\Http\Controllers;
use App\Models\feedbackmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class feedbackadmin extends Controller
{
    public function feedbackadmin(){
        $feedback = DB::table('feedback')->get();
        return view('ADMIN/daftarfeedback',['feedback' => $feedback]);
    }
    public function reply($feedback_id){
        $update = feedbackmodel::find($feedback_id);
        return view('ADMIN/form',compact('update'));
    }

    public function update(request $request, $feedback_id){
            $update = feedbackmodel::find($feedback_id);  
            $update->subject= $request->subject;
            $update->deskripsi = $request->deskripsi;
            $update->reply = $request->reply;
            $update -> save();
           
            return redirect('/daftarfeedback');         
    
        }

    public function delete($feedback_id){
        $deletefeedback = feedbackmodel::find($feedback_id);
         if($deletefeedback->delete()){}
           return redirect()->back();
    }
}
