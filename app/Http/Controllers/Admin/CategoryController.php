<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::orderBy('id','desc')->get();
        return view('Admin.Category.Index',compact('data'));
    }

    public function create(){
        return view('Admin.Category.Add');
    }

    public function store(request $request){

        $data = new Category;
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('category');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Category');
    }


    public function delete(request $request){
        $delete = Category::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Category');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Category/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = Category::where('id',$edit_id)->first();
        return view('Admin.Category.Add',compact('edit'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = Category::where('id',$update_id)->first();
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('category');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Category');
    }
}
