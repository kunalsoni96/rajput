<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use App\SubjectStudentCorner;
use Cookie;
class UserController extends Controller
{
    public function login(){
    	  $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $subject = Subject::where('Status','1')->get();

        $cart_count = count($cookie_data);
        $cart = Course::whereIn('id',$cookie_data)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	$subject = Subject::where('Status','1')->get();
    	return view('Frontend.Login',compact('subject','cookie_data','cart_count','subject_student_corner'));
    }

    public function register(){
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
        return view('Frontend.Login',compact('subject','cookie_data','cart_count','subject_student_corner'));
    }


public function mycourse(){
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
        return view('Frontend.Login',compact('subject','cookie_data','cart_count','subject_student_corner'));
    }


public function profile(){
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
        return view('Frontend.Login',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }


}
