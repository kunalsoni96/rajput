<?php

namespace App\Http\Controllers\Admin;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class TestimonialController extends Controller
{
    public function index(){
      $data = Testimonial::orderBy('id','desc')->get();
      return view('Admin.Testimonial.Index',compact('data'));
    }

    public function create(){
      return view('Admin.Testimonial.Add');
    }

    public function store(request $request){
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


    public function delete(request $request){
      $delete = Testimonial::where('id',$request->Delete)->first();
      $delete->delete();
      $request->session()->flash('delete','Your File Deleted Successfully!');
      return redirect()->route('Admin/Testimonials');
    }


    public function editsession(request $request){
      Session::put('edit_id', $request->Edit);
      return redirect()->route('Admin/Testimonials/Edit');
    }

    public function edit(request $request){
      $edit_id = Session::get('edit_id');
      $edit = Testimonial::where('id',$edit_id)->first();
      return view('Admin.Testimonial.Add',compact('edit'));
    }


    public function update(request $request){
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
}