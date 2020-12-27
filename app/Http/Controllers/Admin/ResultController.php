<?php

namespace App\Http\Controllers\Admin;
use App\Result;
use App\ResultCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class ResultController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = Result::orderBy('id','desc')->get();
        return view('Admin.Result.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
        $resultcategory = ResultCategory::where('Status',1)->get();
        return view('Admin.Result.Add',compact('resultcategory'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
        $data = new Result;
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        $data->ResultId = $request->ResultId;
        $data->Rank = $request->Rank;
        $data->Subject = $request->Subject;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('result');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Result');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = Result::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Result');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Result/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
        $edit_id = Session::get('edit_id');
        $resultcategory = ResultCategory::where('Status',1)->get();
        $edit = Result::where('id',$edit_id)->first();
        return view('Admin.Result.Add',compact('edit','resultcategory'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
        $data = Result::where('id',$request->Update)->first();
        $update_id  = $request->Update;
       $data->Name = $request->Name;
        $data->Status = $request->Status;
        $data->Rank = $request->Rank;
        $data->Subject = $request->Subject;
         $data->ResultId = $request->ResultId;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('result');
            $file->move($filePath,$name);
            $data->Image = $name;
         }
        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Result');
    }
    else{
        return redirect()->route('Index');
    }
}
}
