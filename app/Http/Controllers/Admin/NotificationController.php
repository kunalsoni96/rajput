<?php

namespace App\Http\Controllers\Admin;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class NotificationController extends Controller
{
    public function index(){
        $data = Notification::orderBy('id','desc')->get();
        return view('Admin.Notification.Index',compact('data'));
    }

    public function create(){
        return view('Admin.Notification.Add');
    }

    public function store(request $request){
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


    public function delete(request $request){
        $delete = Notification::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Notification');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Notification/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = Notification::where('id',$edit_id)->first();
        return view('Admin.Notification.Add',compact('edit'));
    }


    public function update(request $request){
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
}
