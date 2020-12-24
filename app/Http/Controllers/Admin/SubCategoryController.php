<?php

namespace App\Http\Controllers\Admin;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class SubCategoryController extends Controller
{
    public function index(){
        $data = SubCategory::join('categories','categories.id','subcategories.CategoryId')->select('categories.Name as Category', 'subcategories.*')->orderBy('id','desc')->get();
        return view('Admin.SubCategory.Index',compact('data'));
    }

    public function create(){
        $category = Category::where('Status',1)->get();
        return view('Admin.SubCategory.Add',compact('category'));
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
}