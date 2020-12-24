<?php

namespace App\Http\Controllers\Admin;
use App\ResultCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class ResultCategoryController extends Controller
{
    public function index(){
        $data = ResultCategory::orderBy('id','desc')->get();
        return view('Admin.ResultCategory.Index',compact('data'));
    }

    public function create(){
        return view('Admin.ResultCategory.Add');
    }

    public function store(request $request){

        $data = new ResultCategory;
        $data->TitleandYear = $request->TitleandYear;
        $data->Status = $request->Status;
       

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/ResultCategory');
    }


    public function delete(request $request){
        $delete = ResultCategory::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/ResultCategory');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/ResultCategory/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = ResultCategory::where('id',$edit_id)->first();
        return view('Admin.ResultCategory.Add',compact('edit'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = ResultCategory::where('id',$update_id)->first();
         $data->TitleandYear = $request->TitleandYear;
        $data->Status = $request->Status;
       


        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/ResultCategory');
    }
}
