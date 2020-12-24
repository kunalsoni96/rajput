<?php

namespace App\Http\Controllers\Admin;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class ImageController extends Controller
{
    public function index(){
        $data = Image::orderBy('id','desc')->get();
        return view('Admin.Image.Index',compact('data'));
    }

    public function create(){
        return view('Admin.Image.Add');
    }

    public function store(request $request){

        $data = new Image;
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Category = $request->Category;
        $data->Description = $request->Description;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('gallery');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

         if($request->hasfile('PDF'))
         {
            $file2 = $request->file('PDF');
            $name2 = time().$file2->getClientOriginalName();
            $filePath2 = public_path('gallery');
            $file2->move($filePath2,$name2);
            $data->PDF = $name2;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Images');
    }


    public function delete(request $request){
        $delete = Image::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Images');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Images/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = Image::where('id',$edit_id)->first();
        return view('Admin.Image.Add',compact('edit'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = Image::where('id',$update_id)->first();
       $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Category = $request->Category;
        $data->Description = $request->Description;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('gallery');
            $file->move($filePath,$name);
            $data->Image = $name;
         }
         if($request->hasfile('PDF'))
         {
            $file2 = $request->file('PDF');
            $name2 = time().$file2->getClientOriginalName();
            $filePath2 = public_path('gallery');
            $file2->move($filePath2,$name2);
            $data->PDF = $name2;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Images');
    }
}
