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
use Auth;
use App\User;

class CustomerController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('DeliveryStatus',0)->orderBy('order.id','desc')->get();
        return view('Admin.Sales.AllSales',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function today_sales(){
        if(Auth::user()->role=='admin'){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('DeliveryStatus',0)->where('Date',date('Y-m-d'))->orderBy('order.id','desc')->get();
        return view('Admin.Sales.TodaySales',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function delivered_product(){
        if(Auth::user()->role=='admin'){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->orwhere('DeliveryStatus',1)->orwhere('DeliveryStatus',2)->orderBy('order.id','desc')->get();
        return view('Admin.Sales.DeliveredProduct',compact('data'));   
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function cancelled_product(){
        if(Auth::user()->role=='admin'){
        $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('DeliveryStatus',2)->orderBy('order.id','desc')->get();
        return view('Admin.Sales.CancelledProduct',compact('data'));   
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function all_customers(){
        if(Auth::user()->role=='admin'){
        $data = User::where('role','customer')->get();
        return view('Admin.Sales.AllCustomer',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function active_customers(){
        if(Auth::user()->role=='admin'){
        $data = User::join('order','order.UserId','users.id')->where('order.PaymentStatus','1')->where('role','customer')->get();
        return view('Admin.Sales.ActiveCustomer',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function view_session_sales(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('view',$request->View);
        return redirect()->route('Admin/Sales/View');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function view_sales(request $request){
        if(Auth::user()->role=='admin'){
        $view_id = Session::get('view');
         $data = Order::join('users','users.id','order.UserId')->select('users.name','users.email','users.Mobile','order.*')->where('order.id',$view_id)->orderBy('order.id','desc')->first();
        return view('Admin.Sales.SalesDetails',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
        $data = new SubCategory;
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/SubCategory');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = SubCategory::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/SubCategory');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/SubCategory/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
        $edit_id = Session::get('edit_id');
        $category = Category::where('Status',1)->get();
        $edit = SubCategory::where('id',$edit_id)->first();
        return view('Admin.SubCategory.Add',compact('edit','category'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
        $update_id  = $request->Update;
        $data = SubCategory::where('id',$update_id)->first();
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/SubCategory');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function delivery_status_change(request $request){
        if(Auth::user()->role=='admin'){
        $data = Order::where('id',$request->id)->first();
        $data->DeliveryStatus = $request->DeliveryStatus;
        $data->save();
        return $data->DeliveryStatus;
    }
    else{
        return redirect()->route('Index');
    }
}

}