<?php

namespace App\Http\Controllers\Admin;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class TestimonialController extends Controller
{
    public function index(){
      if(Auth::user()->role=='admin'){
      $data = Testimonial::orderBy('id','desc')->get();
      return view('Admin.Testimonial.Index',compact('data'));
    }

    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
      if(Auth::user()->role=='admin'){
      return view('Admin.Testimonial.Add');
    }

    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
      if(Auth::user()->role=='admin'){
      $data = new Testimonial;
      $data->Message = $request->Message;
      $data->Designation = $request->Designation;
      $data->Status = $request->Status;
      $data->Name = $request->Name;
      if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('testimonial');
            $file->move($filePath,$name);
            $data->Image = $name;
         }
      $data->save();
      $request->session()->flash('success','Your Testimonial Uploaded successfully!');
      return redirect()->route('Admin/Testimonials');
    }

    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
      if(Auth::user()->role=='admin'){
      $delete = Testimonial::where('id',$request->Delete)->first();
      $delete->delete();
      $request->session()->flash('delete','Your File Deleted Successfully!');
      return redirect()->route('Admin/Testimonials');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
      if(Auth::user()->role=='admin'){
      Session::put('edit_id', $request->Edit);
      return redirect()->route('Admin/Testimonials/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
      if(Auth::user()->role=='admin'){
      $edit_id = Session::get('edit_id');
      $edit = Testimonial::where('id',$edit_id)->first();
      return view('Admin.Testimonial.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
      if(Auth::user()->role=='admin'){
      $update_id  = $request->Update;
      $data = Testimonial::where('id',$update_id)->first();
      $data->Message = $request->Message;
      $data->Designation = $request->Designation;
      $data->Name = $request->Name;
      $data->Status = $request->Status;
      if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('testimonial');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Testimonials');
    }
    else{
        return redirect()->route('Index');
    }
  }
}