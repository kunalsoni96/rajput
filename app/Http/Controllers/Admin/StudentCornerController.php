<?php

namespace App\Http\Controllers\Admin;
use App\StudentCorner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use App\Category;
use App\SubCategory;
use App\SubjectStudentCorner;
use Auth;

class StudentCornerController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = StudentCorner::orderBy('id','desc')->get();
        return view('Admin.StudentCorner.Index',compact('data'));
    }

    else{
        return redirect()->route('Index');
    }

    }

    public function create(){
        if(Auth::user()->role=='admin'){
        $subcategory = SubCategory::where('Status',1)->get();
        $category = Category::where('Status',1)->get();
        $subject = SubjectStudentCorner::where('Status',1)->get();
        return view('Admin.StudentCorner.Add',compact('subcategory','category','subject'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
        $data = new StudentCorner;
        $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->SubCategoryId = $request->SubCategoryId;
        $data->CourseType = $request->CourseType;
        $data->Description = $request->Description;
        $data->Language = $request->Language;
        $data->SubjectId = $request->SubjectId;
        
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('studentcorner');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

         if($request->hasfile('PDF'))
         {
            $file = $request->file('PDF');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('studentcorner');
            $file->move($filePath,$name);
            $data->PDF = $name;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/StudentCorner');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
        if(Auth::user()->role=='admin'){
        $delete = StudentCorner::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/StudentCorner');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/StudentCorner/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
        $subject = SubjectStudentCorner::where('Status',1)->get();
        $edit_id = Session::get('edit_id');
        $subcategory = SubCategory::where('Status',1)->get();
        $category = Category::where('Status',1)->get();
        $edit = StudentCorner::where('id',$edit_id)->first();
        return view('Admin.StudentCorner.Add',compact('edit','category','subcategory','subject'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
        if(Auth::user()->role=='admin'){
        $update_id  = $request->Update;
        $data = StudentCorner::where('id',$update_id)->first();
      $data->Title = $request->Title;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->SubCategoryId = $request->SubCategoryId;
        $data->CourseType = $request->CourseType;
        $data->Description = $request->Description;
        $data->Language = $request->Language;
        $data->SubjectId = $request->SubjectId;
        
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('studentcorner');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

         if($request->hasfile('PDF'))
         {
            $file = $request->file('PDF');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('studentcorner');
            $file->move($filePath,$name);
            $data->PDF = $name;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/StudentCorner');
    }
    else{
        return redirect()->route('Index');
    }
    }
}
