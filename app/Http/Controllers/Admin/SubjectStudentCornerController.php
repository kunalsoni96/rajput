<?php

namespace App\Http\Controllers\Admin;
use App\SubjectStudentCorner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;

class SubjectStudentCornerController extends Controller{
    public function index(){
        $data = SubjectStudentCorner::orderBy('id','desc')->get();
        return view('Admin.StudentCorner.SubjectIndex',compact('data'));
    }

    public function create(){
        return view('Admin.StudentCorner.SubjectAdd');
    }

    public function store(request $request){
        $data = new SubjectStudentCorner;
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
        return redirect()->route('Admin/SubjectStudentCorner');
    }


    public function delete(request $request){
        $delete = SubjectStudentCorner::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/SubjectStudentCorner');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/SubjectStudentCorner/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $edit = SubjectStudentCorner::where('id',$edit_id)->first();
        return view('Admin.StudentCorner.SubjectAdd',compact('edit'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = SubjectStudentCorner::where('id',$update_id)->first();
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
        return redirect()->route('Admin/SubjectStudentCorner');
    }
}
