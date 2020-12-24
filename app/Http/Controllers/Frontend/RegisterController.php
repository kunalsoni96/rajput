<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use Cookie;
use App\SubjectStudentCorner;

class RegisterController extends Controller
{
    public function index(){
    	  $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();
        $cart_count = count($cookie_data);
    	$subject = Subject::where('Status','1')->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.Register',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }
}
