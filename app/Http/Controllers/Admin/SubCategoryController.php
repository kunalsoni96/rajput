<?php

namespace App\Http\Controllers\Admin;
use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class SubCategoryController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = SubCategory::join('categories','categories.id','subcategories.CategoryId')->select('categories.Name as Category', 'subcategories.*')->orderBy('id','desc')->get();
        return view('Admin.SubCategory.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
        $category = Category::where('Status',1)->get();
        return view('Admin.SubCategory.Add',compact('category'));
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
}