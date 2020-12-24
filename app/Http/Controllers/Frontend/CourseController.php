<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\SubjectStudentCorner;
use App\Category;
use App\SubCategory;
use App\Subject;
use App\Cart;
use App\Contact;
use Cookie;

class CourseController extends Controller
{
    public function desktop(){
        $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();

        $cart_count = count($cookie_data);
    	$category = Category::where('Status',1)->get();
    	$subcategory = SubCategory::where('Status',1)->get();
    	$subject = Subject::where('Status',1)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	$data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type','Desktop-Course')->orderBy('products.id','desc')->get();
    	return view('Frontend.DesktopCourse',compact('data','subject','subcategory','category','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function pendrive(){
        $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();

        $cart_count = count($cookie_data);
    	$category = Category::where('Status',1)->get();
    	$subcategory = SubCategory::where('Status',1)->get();
    	$subject = Subject::where('Status',1)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	$data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type','Pendrive-Course')->orderBy('products.id','desc')->get();
    	return view('Frontend.PendriveCourse',compact('data','subject','cart_count','subcategory','category','cookie_data','cart_count','cart','subject_student_corner'));
    }


    public function category_change(request $request){
    	$data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type',$request->Type)->where('CategoryId',$request->id)->orderBy('products.id','desc')->get();
    	return $data;
    }

    public function sub_category_change(request $request){
    	$data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type',$request->Type)->where('SubCategoryId',$request->id)->orderBy('products.id','desc')->get();
        return $data;
    }

    public function subject_change(request $request){
    	$data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type',$request->Type)->where('SubjectId',$request->id)->orderBy('products.id','desc')->get();
        return $data;
    }

    public function language_change(request $request){
    	$data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type',$request->Type)->where('Language',$request->id)->orderBy('products.id','desc')->get();

        return $data;
    }



    public function desktop_search(request $request){
        $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();

        $cart_count = count($cookie_data);
        $category = Category::where('Status',1)->get();
        $subcategory = SubCategory::where('Status',1)->get();
        $subject = Subject::where('Status',1)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
        $data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type','Desktop-Course')->where('products.ProductName','LIKE','%'.$request->Search.'%')->orderBy('products.id','desc')->get();

        return view('Frontend.DesktopSearch',compact('data','subject','subcategory','category','cookie_data','cart_count','cart','subject_student_corner'));
    }


     public function pendrive_search(request $request){
        $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();

        $cart_count = count($cookie_data);
        $category = Category::where('Status',1)->get();
        $subcategory = SubCategory::where('Status',1)->get();
        $subject = Subject::where('Status',1)->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
        $data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->select('subject.Name as Subject', 'categories.Name as Category', 'products.*')->where('products.Status',1)->where('products.Type','Pendrive-Course')->where('products.ProductName','LIKE','%'.$request->Search.'%')->orderBy('products.id','desc')->get();
        
        return view('Frontend.PendriveSearch',compact('data','subject','subcategory','category','cookie_data','cart_count','cart','subject_student_corner'));
    }



    public function productname(request $request, $productname){
        $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
        $data = Course::join('subject','subject.id','products.SubjectId')->join('categories','categories.id','products.CategoryId')->join('subcategories','subcategories.id','products.SubCategoryId')->select('subject.Name as Subject', 'subcategories.Name as SubCategory', 'categories.Name as Category', 'products.*')->where('products.ProductName',$productname)->orderBy('products.id','desc')->first();

        $cart = Course::whereIn('id',$cookie_data)->get();

        if($data){
            return view('Frontend.CourseDetails',compact('data','cart_count','cookie_data','cart','subject_student_corner'));
        }
        else{
            return redirect()->route('Index');
        }
    }


}
