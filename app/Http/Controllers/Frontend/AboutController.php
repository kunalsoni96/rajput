<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use App\Team;
use Cookie;
use App\SubjectStudentCorner;
use App\Course;

class AboutController extends Controller
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
    	$team = Team::where('Status','1')->orderBy('id','asc')->get();
    	return view('Frontend.About',compact('subject','team','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function about_cgpsc(request $request){
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
        $team = Team::where('Status','1')->orderBy('id','asc')->get();
        return view('Frontend.AboutCGPSC',compact('subject','team','cookie_data','cart_count','cart','subject_student_corner'));
    }
}
