<?php

namespace App\Http\Controllers\Admin;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class SubjectController extends Controller
{
    public function index(){
        $data = Subject::orderBy('id','desc')->get();
        return view('Admin.Subject.Index',compact('data'));
    }

    public function create(){
        return view('Admin.Subject.Add');
    }

    public function store(request $request){

        $data = new Subject;
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('subject');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Subject');
    }


    public function delete(request $request){
        $delete = Subject::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Subject');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Subject/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = Subject::where('id',$edit_id)->first();
        return view('Admin.Subject.Add',compact('edit'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = Subject::where('id',$update_id)->first();
        $data->Name = $request->Name;
        $data->Status = $request->Status;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('subject');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Subject');
    }
}
