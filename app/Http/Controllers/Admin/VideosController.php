<?php

namespace App\Http\Controllers\Admin;
use App\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class VideosController extends Controller
{
    public function index(){
        $data = Videos::orderBy('id','desc')->get();
        return view('Admin.Videos.Index',compact('data'));
    }

    public function create(){
        return view('Admin.Videos.Add');
    }

    public function store(request $request){

        $data = new Videos;
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Category = $request->Category;
        $data->VideoURL = $request->VideoURL;
        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Videos');
    }


    public function delete(request $request){
        $delete = Videos::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Videos');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Videos/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = Videos::where('id',$edit_id)->first();
        return view('Admin.Videos.Add',compact('edit'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = Videos::where('id',$update_id)->first();
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Category = $request->Category;
        $data->VideoURL = $request->VideoURL;
        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Videos');
    }
}