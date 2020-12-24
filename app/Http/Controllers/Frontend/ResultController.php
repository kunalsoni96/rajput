<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Result;
use App\ResultCategory;
use App\Subject;
use App\Course;
use App\SubjectStudentCorner;
use Cookie;


class ResultController extends Controller
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
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	$result = Result::join('resultcategory','resultcategory.id','result.ResultId')->select('resultcategory.TitleandYear','result.*')->orderBy('result.id','desc')->get();
    	$subject = Subject::where('Status','1')->get();
    	return view('Frontend.Result',compact('result','subject','cookie_data','cart_count','cart','subject_student_corner'));
    }
}
