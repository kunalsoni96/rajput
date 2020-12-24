<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use Cookie;
use App\SubjectStudentCorner;

class CurrentAffairsController extends Controller
{
    public function index(){

    	  $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
        $cart = Course::whereIn('id',$cookie_data)->get();
    	$subject = Subject::where('Status','1')->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.CurrentAffairs',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }
}
