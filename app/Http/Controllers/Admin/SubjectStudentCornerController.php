<?php

namespace App\Http\Controllers\Admin;
use App\SubjectStudentCorner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Auth;
use Storage;

class SubjectStudentCornerController extends Controller{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = SubjectStudentCorner::orderBy('id','desc')->get();
        return view('Admin.StudentCorner.SubjectIndex',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
        if(Auth::user()->role=='admin'){
        return view('Admin.StudentCorner.SubjectAdd');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
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
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = SubjectStudentCorner::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/SubjectStudentCorner');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/SubjectStudentCorner/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
        $edit_id = Session::get('edit_id');
        $edit = SubjectStudentCorner::where('id',$edit_id)->first();
        return view('Admin.StudentCorner.SubjectAdd',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
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
    else{
        return redirect()->route('Index');
    }
    }
}
