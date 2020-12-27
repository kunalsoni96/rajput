<?php

namespace App\Http\Controllers\Admin;
use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Cookie;
use Auth;

class BannerController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
          $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
    	$data = Banner::orderBy('id','desc')->get();
    	return view('Admin.Banner.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
          $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
    	return view('Admin.Banner.Add');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
    	$data = new Banner;
    	$data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Description = $request->Description;
    	if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('banner');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

         if($request->hasfile('MobileImage'))
         {
            $file2 = $request->file('MobileImage');
            $name2 = time().$file2->getClientOriginalName();
            $filePath2 = public_path('banner');
            $file2->move($filePath2,$name2);
            $data->MobileImage = $name2;
         }

    	$data->save();
    	$request->session()->flash('success','Your File Uploaded successfully!');
    	return redirect()->route('Admin/Banner');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
    	$delete = Banner::where('id',$request->Delete)->first();
    	$delete->delete();
    	$request->session()->flash('delete','Your File Deleted Successfully!');
    	return redirect()->route('Admin/Banner');
        }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
    	Session::put('edit_id', $request->Edit);
    	return redirect()->route('Admin/Banner/Edit');
        }
        else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
          $cookie = Cookie::get('shoppingcarts');
        if(isset($cookie)){
        $cookie_data = json_decode($cookie);
        }
        else{
        $cookie_data = [];
        }

        $cart_count = count($cookie_data);
    	$edit_id = Session::get('edit_id');
    	$edit = Banner::where('id',$edit_id)->first();
    	return view('Admin.Banner.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
    	$update_id  = $request->Update;
    	$data = Banner::where('id',$update_id)->first();
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Description = $request->Description;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('banner');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

         if($request->hasfile('MobileImage'))
         {
            $file2 = $request->file('MobileImage');
            $name2 = time().$file2->getClientOriginalName();
            $filePath2 = public_path('banner');
            $file2->move($filePath2,$name2);
            $data->MobileImage = $name2;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Banner');
    }
    else{
        return redirect()->route('Index');
    }
}
}
