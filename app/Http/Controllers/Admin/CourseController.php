<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use App\Subject;

class CourseController extends Controller
{
    public function index(){
        $data = Course::join('subject','subject.id','products.SubjectId')->select('subject.Name as Subject','products.*')->orderBy('products.id','desc')->get();
        return view('Admin.Course.Index',compact('data'));
    }

    public function create(){
        $subject = Subject::where('Status',1)->get();
        $category = Category::where('Status',1)->get();
        $subcategory = SubCategory::where('Status',1)->get();
        return view('Admin.Course.Add',compact('category','subcategory','subject'));
    }

    public function store(request $request){
        $data = new Course();
        $data->ProductName = $request->ProductName;
        $data->Status = $request->Status;
        $data->CategoryId = $request->CategoryId;
        $data->SubCategoryId = $request->SubCategoryId;
        $data->Description = $request->Description;
        $data->Price = $request->Price;
        $data->SubDescription = $request->SubDescription;
        $data->DiscountPrice = $request->DiscountPrice;
        $data->SubjectId = $request->SubjectId;
        $data->Year = $request->Year;
        $data->Type = $request->Type;
        $data->Language = $request->Language;
        $data->Features = $request->Features;
        $data->Availability = $request->Availability;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('course');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('success','Your File Uploaded successfully!');
        return redirect()->route('Admin/Course');
    }


    public function delete(request $request){
        $delete = Course::where('id',$request->Delete)->first();
        $delete->delete();
        $request->session()->flash('delete','Your File Deleted Successfully!');
        return redirect()->route('Admin/Course');
    }


    public function editsession(request $request){
        Session::put('edit_id', $request->Edit);
        return redirect()->route('Admin/Course/Edit');
    }

    public function edit(request $request){
        $edit_id = Session::get('edit_id');
        $category = Category::get();
        $subject = Subject::where('Status',1)->get();
        $subcategory = SubCategory::get();
        $edit = Course::where('id',$edit_id)->first();
        return view('Admin.Course.Add',compact('edit','category','subcategory','subject'));
    }


    public function update(request $request){
        $update_id  = $request->Update;
        $data = Course::where('id',$update_id)->first();
        $data->ProductName = $request->ProductName;
        $data->CategoryId = $request->CategoryId;
        $data->SubCategoryId = $request->SubCategoryId;
        $data->Description = $request->Description;
        $data->Price = $request->Price;
        $data->SubDescription = $request->SubDescription;
        $data->DiscountPrice = $request->DiscountPrice;
        $data->SubjectId = $request->SubjectId;
        $data->Language = $request->Language;
        $data->Status = $request->Status;
        $data->Type = $request->Type;
        $data->Year = $request->Year;
        $data->Features = $request->Features;
        $data->Availability = $request->Availability;
        if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('course');
            $file->move($filePath,$name);
            $data->Course = $name;
         }

        $data->save();

        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Course');
    }
}
