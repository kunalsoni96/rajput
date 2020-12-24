<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admission;
use App\Category;
use Cookie;
use App\Subject;
use App\Course;
use App\SubjectStudentCorner;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\AdmissionClone;
use Auth;


class AdmissionController extends Controller
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
      $subject = Subject::where('Status','1')->get();
    	$data = Category::where('Status',1)->get();
      $cart = Course::whereIn('id',$cookie_data)->get();
      $subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.Admission',compact('data','subject','cookie_data','cart_count','cart','subject','subject_student_corner'));
    }

     

     public function store(request $request){
      $validate = Admission::orwhere('Email',$request->Email)->orwhere('PhoneNumber',$request->PhoneNumber)->count();
      if($validate==0){
        $payment = PaytmWallet::with('receive');
        $ord_id = rand(00000000,999999999);

        $payment->prepare([
            'order'=> $ord_id,
            'user' => Auth::user()->id,
            'mobile_number' => $request->PhoneNumber,
            'email' => $request->Email, // your user email address
            'amount' => $request->Amount, // amount will be paid in INR.
            'callback_url' => url('Admission/Callback/'.$ord_id) // callback URL
        ]);
        $data = new AdmissionClone();
       $data->Name = $request->Name;
       $data->Email = $request->Email;
       $data->PhoneNumber = $request->PhoneNumber;
       $data->Gender = $request->Gender;
       $data->Category = $request->Category;
       $data->Course = $request->Course;
       $data->Address = $request->Address;
       $data->City = $request->City;
       $data->State = $request->State;
       $data->Message = $request->Message;
       $data->RandomCode = $ord_id;
       $data->save();
        return $payment->receive();
      }
      else{
        $request->session()->flash('error','Email or Mobile Number is Already Exists');
        return redirect()->route('Admission');
      }
    }

   public function callback(request $request, $id){
         $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();
       $clone_data = AdmissionClone::where('RandomCode',$id)->first();
       if($response['STATUS']=='TXN_SUCCESS'){
       $data = new Admission();
       $data->Name = $clone_data->Name;
       $data->Email = $clone_data->Email;
       $data->PhoneNumber = $clone_data->PhoneNumber;
       $data->Gender = $clone_data->Gender;
       $data->Course = $clone_data->Course;
       $data->Category = $clone_data->Category;
       $data->Address = $clone_data->Address;
       $data->City = $clone_data->City;
       $data->State = $clone_data->State;
       $data->Message = $clone_data->Message;
       $data->CourseAmount = $response['TXNAMOUNT'];
       $data->PaymentId = $transaction->getTransactionId();
       $data->save();
       $request->session()->flash('success','Form Submitted Successfully');
       return redirect()->route('Admission');
     }
     else{
       return redirect()->route('Admission');
     }
   }



}
