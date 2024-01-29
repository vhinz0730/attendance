<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{

    public function signup(){
        return view ('signup');
    }

    public function store(Request $request){
        $validate = $request -> validate([
            "first_name" => ['required'],
            "last_name" => ['required'],
            "year_level" => ['required'],
            "section" => ['required', 'min:1', 'max:1'],
            "email" => ['required', 'email', Rule::unique('students', 'email')] 
        ]);
        $student = Student::create($validate);       
        return redirect('/')->with('alert',  'Email Registered!');
      
    }

    public function log(Request $request){
        $validate = $request -> validate([
            "email" => ['required', 'email']
        ]);
        $student = DB::table('students')->where('email', $validate)->count();
        if($student == '1'){
            $student=DB::table('students') ->where ('email', $validate)->get();
                foreach ($student as $student){
                $newLog = new Log;
                $newLog -> first_name = $student -> first_name; 
                $newLog -> last_name = $student -> last_name;
                $newLog -> year_level = $student -> year_level; 
                $newLog -> section = $student -> section;
                $newLog -> email = $student -> email;  
                $newLog -> created_at = Carbon::now()->addDays(1)->addHours(8);
                $newLog->save();
                }
                return redirect()->back() ->with('alert',  'Time In');
        }
        else{
            return redirect()->back() ->with('alert',  'Email Address is not Recognize');
        }
    }
}
