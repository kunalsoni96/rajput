<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Cookie;
use App\SubjectStudentCorner;
use App\Subject;
use App\Course;
class ContactController extends Controller
{
    public function index(){
          $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }
        $cart = Course::whereIn('id',$cookie_data)->get();
        $cart_count = count($cookie_data);
        $cart_row = Course::whereIn('id',$cookie_data)->orderBy('id','desc')->get();
        $subject = Subject::where('Status','1')->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.Contact',compact('subject','cart_row','cart_count','cart','subject_student_corner'));
    }

    public function store(request $request){
    	$data = new Contact();
    	$data->Name = $request->Name;
    	$data->Email = $request->Email;
    	$data->Mobile = $request->Mobile;
    	$data->Message = $request->Message;
    	$data->save();
    	$request->session()->flash('success','Form Submitted Successfully!');
    	if(isset($request->home)){
    		return redirect()->route('Index');
    	}

    	else{
    		return redirect()->route('Contact');
    	}
    	
    	
    }
}
