<?php

namespace App\Http\Controllers\Admin;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class NotificationController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = Notification::orderBy('id','desc')->get();
        return view('Admin.Notification.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
        return view('Admin.Notification.Add');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
        $data = new Notification;
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->URL = $request->URL;
        if($request->hasfile('PDF'))
         {
            $file = $request->file('PDF');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('notification');
            $file->move($filePath,$name);
            $data->PDF = $name;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Notification');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = Notification::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Notification');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Notification/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
        $edit_id = Session::get('edit_id');
        $edit = Notification::where('id',$edit_id)->first();
        return view('Admin.Notification.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
        $update_id  = $request->Update;
        $data = Notification::where('id',$update_id)->first();
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->URL = $request->URL;
        if($request->hasfile('PDF'))
         {
            $file = $request->file('PDF');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('notification');
            $file->move($filePath,$name);
            $data->PDF = $name;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Notification');
    }
    else{
        return redirect()->route('Index');
    }
    }
}
