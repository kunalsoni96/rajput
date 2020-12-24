<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use App\Image;
use App\Course;
use App\Team;
use App\Testimonial;
use App\StudentCorner;
use App\Result;
use App\Notification;
use App\Category;
use App\Subject;
use App\SubjectStudentCorner;
use Cookie;
use Auth;

class IndexController extends Controller
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
    $data = Banner::where('Status','1')->orderBy('id','desc')->get();
    
    $course = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->join('subcategories','subcategories.id','products.SubCategoryId')->select('subject.Name as Subject', 'subcategories.Name as SubCategory', 'categories.Name as Category', 'products.*')->where('products.Status',1)->orderBy('products.id','desc')->get();

    $student_corner = StudentCorner::join('subject_for_studentcorner','subject_for_studentcorner.id','studentcorner.SubjectId')->select('subject_for_studentcorner.Name as Subject','subject_for_studentcorner.Image as SubjectImage', 'studentcorner.*')->where('studentcorner.Status','1')->limit(6)->orderBy('id','desc')->get();
    $team = Team::where('Status','1')->limit(6)->orderBy('id','asc')->get();
    $testimonial = Testimonial::where('Status','1')->limit(12)->orderBy('id','desc')->get();
    $media = Image::where('Status','1')->where('Category','Media')->limit(10)->orderBy('id','desc')->get();
    $result = Result::join('resultcategory','resultcategory.id','result.ResultId')->select('resultcategory.TitleandYear','result.*')->where('result.Status','1')->orderBy('id','desc')->get();
    $notification = Notification::where('Status','1')->orderBy('id','desc')->get();
    $category = Category::where('Status','1')->get();
    $subject = Subject::where('Status','1')->get();
    $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    $cart = Course::whereIn('id',$cookie_data)->get();
    return view('Frontend.Index',compact('notification','data','course','student_corner','team','testimonial','media','result','category','subject','cookie_data','cart_count','subject_student_corner','cart'));
   }
}
