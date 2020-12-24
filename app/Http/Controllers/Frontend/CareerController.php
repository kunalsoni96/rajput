<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subject;
use Cookie;
use App\Course;
use Mail;
use App\SubjectStudentCorner;

class CareerController extends Controller
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
    	$subject = Subject::where('Status','1')->get();
        $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.Career',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }



    public function store(request $request){
        $array_data = array('Name'=>'kunal soni', 'Email'=>'kunal1071996@gmail.com');
        Mail::send('Admin.Sales.Mail',$array_data,function($message) use ($array_data){
            $message->to($array_data['Email'], $array_data['Name'])->subject('Rajput Tutorials - Order Confirmed');
            $message->from('rajputcloudsway@gmail.com','kunal soni');
        });
        return 'sent';
    }
}
