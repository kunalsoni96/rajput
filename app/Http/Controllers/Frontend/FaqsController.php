<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use App\Course;
use App\SubjectStudentCorner;
use Cookie;

class FaqsController extends Controller
{
    public function terms(){
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
    	return view('Frontend.Terms',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function return_policy(){
    	  $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();
        $cart_count = count($cookie_data);
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	$subject = Subject::where('Status','1')->get();
    	return view('Frontend.ReturnPolicy',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function faqs(){
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
    	return view('Frontend.Faqs',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }
}
