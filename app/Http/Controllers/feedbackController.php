<?php
namespace App\Http\Controllers;
use App\Models\feedbackmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class feedbackController extends Controller
{
    public function feedback()
    {
        return view('ADMIN/feedback');
    }
}
