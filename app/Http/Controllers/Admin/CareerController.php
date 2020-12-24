<?php

namespace App\Http\Controllers\Admin;
use App\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Cookie;

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

        $cart_count = count($cookie_data);
      $data = Career::orderBy('id','desc')->get();
      return view('Admin.Career.Index',compact('data'));
    }

    public function create(){
      return view('Admin.Career.Add');
    }

    public function store(request $request){
      $data = new Career;
      $data->JobTitle = $request->JobTitle;
      $data->Description = $request->Description;
      $data->DateOfInterview = $request->DateOfInterview;
      $data->Status = $request->Status;
      if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('career');
            $file->move($filePath,$name);
            $data->Image = $name;
         }
      $data->save();
      $request->session()->flash('success','Your Career Uploaded successfully!');
      return redirect()->route('Admin/Career');
    }


    public function delete(request $request){
      $delete = Career::where('id',$request->Delete)->first();
      $delete->delete();
      $request->session()->flash('delete','Your File Deleted Successfully!');
      return redirect()->route('Admin/Career');
    }


    public function editsession(request $request){
      Session::put('edit_id', $request->Edit);
      return redirect()->route('Admin/Career/Edit');
    }

    public function edit(request $request){
      $edit_id = Session::get('edit_id');
      $edit = Career::where('id',$edit_id)->first();
      return view('Admin.Career.Add',compact('edit'));
    }


    public function update(request $request){
      $update_id  = $request->Update;
      $data = Career::where('id',$update_id)->first();
      $data->JobTitle = $request->JobTitle;
      $data->Description = $request->Description;
      $data->DateOfInterview = $request->DateOfInterview;
      $data->Status = $request->Status;
      if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('career');
            $file->move($filePath,$name);
            $data->Image = $name;
         }
        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Career');
    }
}