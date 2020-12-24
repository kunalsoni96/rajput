<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use App\Videos;
use App\Subject;
use App\SubjectStudentCorner;
use Cookie;
use App\Course;

class GalleryController extends Controller
{
    public function news_and_media(){
          $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
        $subject = Subject::where('Status','1')->get();
        $cart = Course::whereIn('id',$cookie_data)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	$data = Image::where('Status',1)->where('Category','Media')->orderBy('id','desc')->get();
    	return view('Frontend.NewsAndMedia',compact('data','subject','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function videos(request $request, $id){
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
    	$data = Videos::where('Category',$id)->where('Status',1)->orderBy('id','desc')->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.Videos',compact('data','subject','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function images(){
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
    	$data = Image::where('Status',1)->where('Category','Image')->orderBy('id','desc')->get();
    	return view('Frontend.Images',compact('data','subject','cookie_data','cart_count','cart','subject_student_corner'));
    }
}
