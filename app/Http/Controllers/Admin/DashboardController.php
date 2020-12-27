<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\About;
use App\Video;
use App\Banner;
use App\lp;
use App\Appointment;
use App\Admission;
use App\Contact;
use App\Order;
use Auth;


class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
    	$today_sale = Order::orwhere('DeliveryStatus',1)->orWhere('DeliveryStatus',0)->where('Date',date('Y-m-d'))->count();
    	$all_sale = Order::orwhere('DeliveryStatus',1)->orWhere('DeliveryStatus',0)->count();
    	$cancelled = Order::orwhere('DeliveryStatus',2)->count();
    	$delivered = Order::orwhere('DeliveryStatus',1)->count();
    	$pending = Order::orwhere('DeliveryStatus',0)->count();
        $admission_fee = Admission::sum('CourseAmount');
        $delivered_income = Order::where('DeliveryStatus',1)->sum('GrandTotal');
        $pending_income = Order::where('DeliveryStatus',0)->sum('GrandTotal');

    	$customer = User::where('role','customer')->count();
    	$active_customer = User::join('order','order.UserId','users.id')->where('order.PaymentStatus','1')->where('role','customer')->count();

    	return view('Admin.Dashboard',compact('today_sale','all_sale','cancelled','delivered','pending','customer','active_customer','delivered_income','pending_income','admission_fee'));
    }
    else{
        return redirect()->route('Index');
    }
}
    
}
