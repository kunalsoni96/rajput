<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StudentCorner;
use App\Category;
use App\Subject;
use Cookie;
use App\SubjectStudentCorner;
use App\Course;

class StudentCornerController extends Controller
{
    public function current_affair(request $request, $id){
          $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
        $subject = Subject::where('Status','1')->get();

    	$data = StudentCorner::join('subject_for_studentcorner','subject_for_studentcorner.id','studentcorner.CourseType')->select('studentcorner.*')->where('studentcorner.Status',1)->where('subject_for_studentcorner.Name',$id)->orderBy('studentcorner.id','desc')->get();

        $cart = Course::whereIn('id',$cookie_data)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.CurrentAffairs',compact('data','subject','id','cookie_data','cart_count','cart','subject_student_corner'));
    }

}
