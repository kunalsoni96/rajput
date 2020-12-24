<?php

namespace App\Http\Controllers\Admin;
use App\Result;
use App\ResultCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class ResultController extends Controller
{
    public function index(){
        $data = Result::orderBy('id','desc')->get();
        return view('Admin.Result.Index',compact('data'));
    }

    public function create(){
        $resultcategory = ResultCategory::where('Status',1)->get();
        return view('Admin.Result.Add',compact('resultcategory'));
    }

    public function store(request $request){

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


    public function delete(request $request){
        $delete = Result::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Result');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Result/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $resultcategory = ResultCategory::where('Status',1)->get();
        $edit = Result::where('id',$edit_id)->first();
        return view('Admin.Result.Add',compact('edit','resultcategory'));
    }


    public function update(request $request){
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
}
