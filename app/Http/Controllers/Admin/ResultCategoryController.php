<?php

namespace App\Http\Controllers\Admin;
use App\ResultCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class ResultCategoryController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = ResultCategory::orderBy('id','desc')->get();
        return view('Admin.ResultCategory.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
        return view('Admin.ResultCategory.Add');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
        $data = new ResultCategory;
        $data->TitleandYear = $request->TitleandYear;
        $data->Status = $request->Status;
        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/ResultCategory');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = ResultCategory::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/ResultCategory');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/ResultCategory/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
        $edit_id = Session::get('edit_id');
        $edit = ResultCategory::where('id',$edit_id)->first();
        return view('Admin.ResultCategory.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
        $update_id  = $request->Update;
        $data = ResultCategory::where('id',$update_id)->first();
         $data->TitleandYear = $request->TitleandYear;
        $data->Status = $request->Status;
       


        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/ResultCategory');
    }
    else{
        return redirect()->route('Index');
    }
    }
}
