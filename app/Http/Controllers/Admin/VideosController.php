<?php

namespace App\Http\Controllers\Admin;
use App\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class VideosController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = Videos::orderBy('id','desc')->get();
        return view('Admin.Videos.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
        return view('Admin.Videos.Add');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
        $data = new Videos;
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->Category = $request->Category;
        $data->VideoURL = $request->VideoURL;
        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Videos');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = Videos::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Videos');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Videos/Edit');
    }
    else{
        return redirect()->route('Index');
    }
}

    public function edit(request $request){
           if(Auth::user()->role=='admin'){
        $edit_id = Session::get('edit_id');
        $edit = Videos::where('id',$edit_id)->first();
        return view('Admin.Videos.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
    if(Auth::user()->role=='admin'){
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

    else{
        return redirect()->route('Index');
    }
    }
}