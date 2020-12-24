<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use App\SubjectStudentCorner;
use Cookie;
use App\MyCourse;
use Auth;
use App\Course;

class MyCourseController extends Controller
{
    public function index(request $request){
        if(isset(Auth::user()->id)){
        $data = MyCourse::join('products','products.id','mycourse.ProductId')->select('products.*','mycourse.PurchaseAmount')->where('mycourse.UserId',Auth::user()->id)->orderBy('mycourse.id','desc')->get();     
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
        return view('Frontend.MyCourse',compact('data', 'subject','cookie_data','cart_count','cart','subject_student_corner'));
    }
    else{
        return redirect()->route('Index');
    }
}




}
