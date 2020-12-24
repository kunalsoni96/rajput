<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cart;
use App\Course;
use App\Category;
use App\SubCategory;
use App\Subject;
use App\SubjectStudentCorner;
use Auth;
use App\User;
use App\Order;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use Cookie;
use Session;
use App\MyCourse;
use App\CartCourse;
use Mail;
class ShoppingCartController extends Controller
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

    	$cart = Course::whereIn('id',$cookie_data)->get();
    	$subject_student_corner = SubjectStudentCorner::where('Status','1')->get();
    	return view('Frontend.ShoppingCart',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
    }

    public function store(request $request){

    	$cookie_data = Cookie::get('shoppingcarts');
		if(isset($cookie_data)) {
			$cart_data =	$cookie_data;
		} 
		else{ 
			$cart_data =	"[]";
		}


    	$cart_data = json_decode($cart_data);

    	$result = Course::where('id',$request->ProductId)->first();
    	
    	array_push($cart_data, $request->ProductId);

    	Cookie::queue('shoppingcarts', json_encode($cart_data));
    	
    	return redirect()->back();

	}

	public function remove(request $request){
		$cookie_data = Cookie::get('shoppingcarts');
		if(isset($cookie_data)) {
			$cart_data =	$cookie_data;
		} 
		else{ 
			$cart_data =	"[]";
		}

		$cart_data = json_decode($cart_data);
		$count = count($cart_data);
		$emptyarray = [];

		for($i=0; $i<$count; $i++){
			if($cart_data[$i]!=$request->ProductId){
				array_push($emptyarray, $cart_data[$i]);
			}
		}

		Cookie::queue('shoppingcarts', json_encode($emptyarray));
    	
    	return redirect()->back();
		
	}

	public function checkout(request $request){
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
    	return view('Frontend.Checkout',compact('subject','cookie_data','cart_count','cart','subject_student_corner'));
	}

    public function order_store(request $request){
        $cookie_data = Cookie::get('shoppingcarts');
        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $request->Name;
        $user->email = $request->Email;
        $user->Mobile = $request->Mobile;
        $user->Address = $request->Address;
        $user->City = $request->City;
        $user->State = $request->State;
        $user->PinCode = $request->PinCode;
        $user->Landmark = $request->Landmark;
        $user->save();

        $count = count(json_decode($cookie_data));
        $id = json_decode($cookie_data);
         $ord_id = "ORDID".rand(000000,999999);
        for ($i=0; $i < $count; $i++) { 
            $course = Course::where('id',$id[$i])->first();
            $cart_data = new CartCourse();
            $cart_data->ProductId = $course->id;
            $cart_data->PurchaseAmount = $course->DiscountPrice;
            $cart_data->UserId = Auth::user()->id;
            $cart_data->OrderId = $ord_id;
            $cart_data->save();
        }
        
        Session::put('GrandTotal', '$request->GrandTotal');

        $payment = PaytmWallet::with('receive');
       
        Session::put('userid',$user->id);

        $payment->prepare([
            'order' => $ord_id, 
            'user' => $user->id,
            'mobile_number' => $user->Mobile,
            'email' => $user->email, // your user email address
            'amount' => $request->Amount, // amount will be paid in INR.
            'callback_url' => url('Order/Callback/'.$ord_id) // callback URL
        ]);

        return $payment->receive();

    }

   

    public function order_callback(request $request, $id){

        $transaction = PaytmWallet::with('receive');
        $response = $transaction->response();

        
    if($response['STATUS']=='TXN_SUCCESS'){
        $cart_data = CartCourse::where('OrderId',$id)->get();

        foreach($cart_data as $row) { 
            
            $data = new MyCourse();
            $data->ProductId = $row->ProductId;
            $data->OrderId = $response['ORDERID'];
            $data->UserId = $row->UserId;
            $data->PurchaseAmount = $row->PurchaseAmount;
            $data->Status = 1;
            $data->save();
        }

         $order = new Order();
        $order->PaymentId = $transaction->getTransactionId();
        $order->OrderId = $response['ORDERID'];
        $order->UserId = $data->UserId;
        $order->PaymentStatus  = 1;
        $order->DeliveryStatus = 0;
        $order->GrandTotal = $response['TXNAMOUNT'];
        $order->Date = date('Y-m-d');
        $order->save();

        $userdata = User::where('id',$data->UserId)->first();

        Cookie::queue('shoppingcarts', "[]");
        $course_data = CartCourse::join('products','products.id','cart_course.ProductId')->select('products.ProductName','cart_course.*')->where('OrderId',$id)->get();

        $array_data = array('Name'=>$userdata->name, 'Email'=>$userdata->email, 'OrderId'=>$order->OrderId,'PaymentId'=>$order->PaymentId, 'Address'=>$userdata->Address, 'Landmark'=>$userdata->Landmark, 'City'=>$userdata->City, 'State'=>$userdata->State, 'PinCode'=>$userdata->PinCode, 'Amount'=>$order->GrandTotal,'Mobile'=>$userdata->Mobile, 'course_data'=>$course_data,'OrderDate'=>$order->created_at);
        Mail::send('Admin.Sales.Mail',$array_data,function($message) use ($array_data){
            $message->to($array_data['Email'], $array_data['Name'])->subject('Rajput Tutorials - Order Confirmed');
            $message->from('rajputcloudsway@gmail.com','Rajput Tutorials');
        });

        Mail::send('Admin.Sales.Mail',$array_data,function($message) use ($array_data){
            $message->to('rajputcloudsway@gmail.com', 'Rajput Tutorials')->subject('Rajput Tutorials - Order Confirmed');
            $message->from('rajputcloudsway@gmail.com','Rajput Tutorials');
        });

        return redirect()->route('My-Course');
        }

        
        else{
        return redirect()->route('My-Course');
        }
    }

}
