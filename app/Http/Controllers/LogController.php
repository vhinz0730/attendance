<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Validation\Rule;


class LogController extends Controller
{
    

    public function login(){
        return view('admin.login');
    }

    public function process(Request $request){
        $validate = $request -> validate([
            "email" => ['required'],
            "password" => 'required'
        ]);
            if(auth()->attempt($validate)){
                $request ->session()->regenerate();
                return redirect('index');
            }
            else{
                return view('admin.login');
            }
    }


    public function logout(Request $request){
        auth()->logout();
        $request ->session()->invalidate();
        $request ->session()->regenerateToken();
        return redirect('login');
    }

    public function index(){
        $student = DB::table('students')->get();
        return view('admin.index',['students' => $student]);
    }
        

    public function time(){
        $student = DB::table('logs')->get();
        return view ('admin.log',['students' => $student]);
    }

   

}
