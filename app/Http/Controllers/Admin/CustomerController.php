<?php

namespace App\Http\Controllers\Admin;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use App\Order;
use App\User;

class CustomerController extends Controller
{
    public function index(){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('DeliveryStatus',0)->orderBy('order.id','desc')->get();
        return view('Admin.Sales.AllSales',compact('data'));
    }

    public function today_sales(){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('DeliveryStatus',0)->where('Date',date('Y-m-d'))->orderBy('order.id','desc')->get();
        return view('Admin.Sales.TodaySales',compact('data'));
    }

    public function delivered_product(){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->orwhere('DeliveryStatus',1)->orwhere('DeliveryStatus',2)->orderBy('order.id','desc')->get();
        return view('Admin.Sales.DeliveredProduct',compact('data'));   
    }

    public function cancelled_product(){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('DeliveryStatus',2)->orderBy('order.id','desc')->get();
        return view('Admin.Sales.CancelledProduct',compact('data'));   
    }

    public function all_customers(){
        $data = User::where('role','customer')->get();
        return view('Admin.Sales.AllCustomer',compact('data'));
    }


    public function active_customers(){
        $data = User::join('order','order.UserId','users.id')->where('order.PaymentStatus','1')->where('role','customer')->get();
        return view('Admin.Sales.ActiveCustomer',compact('data'));
    }


    public function view_session_sales(request $request){
        Session::put('view',$request->View);
        return redirect()->route('Admin/Sales/View');
    }

    public function view_sales(request $request){
        $view_id = Session::get('view');
         $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('order.id',$view_id)->orderBy('order.id','desc')->first();
        return view('Admin.Sales.SalesDetails',compact('data'));
    }

    public function store(request $request){
        $data = new SubCategory;
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/SubCategory');
    }


    public function delete(request $request){
        $delete = SubCategory::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/SubCategory');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/SubCategory/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $category = Category::where('Status',1)->get();
        $edit = SubCategory::where('id',$edit_id)->first();
        return view('Admin.SubCategory.Add',compact('edit','category'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = SubCategory::where('id',$update_id)->first();
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/SubCategory');
    }

    public function delivery_status_change(request $request){
        $data = Order::where('id',$request->id)->first();
        $data->DeliveryStatus = $request->DeliveryStatus;
        $data->save();
        return $data->DeliveryStatus;
    }

}