<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class FeedbackController extends Controller
{
    // public function index()
    // {
    //     if (auth::check()) {
    //         if (auth::user()->auth === "Admin"){
                
    //         $feedback = DB::table('feedback')->get();
 
    //         // mengirim data pegawai ke view index
    //         return view('feedbackform',['feedback' => $feedback]);
    //         }
    //     }    
    // }

        public function create()
        {
            return view('feedbackcreate');
        
        }


        public function add(Request $r)
        {
            
            DB::table('feedback')->insert([
                'NoInvoice' => $r->NoInvoice,
                'Nama' => $r->Nama,
                'Rating' => $r->Rating,
                'Ulasan' => $r->Ulasan
            ]);

            return redirect('/');
        
        }       
}