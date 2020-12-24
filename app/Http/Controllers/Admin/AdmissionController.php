<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use App\Admission;
use File;
use Session;
use Storage;
use Cookie;
class AdmissionController extends Controller
{
    public function index(){
        $admission = Admission::orderBy('id', 'DESC')->get();
         return view("Admin/Admission/Index", ['data'=>$admission]);
    }

    public function create(){
       
   }

   public function store(request $request){
       $data = new Admission();
       $data->Name = $data->Name;
       $data->Email = $data->Email;
       $data->PhoneNumber = $data->PhoneNumber;
       $data->Gender = $data->Gender;
       $data->Category = $data->Category;
       $data->Address = $data->Address;
       $data->City = $data->City;
       $data->State = $data->State;
       $data->Message = $data->Message;
       $data->Remark = $data->Remark;
       $data->save();
       $request->session()->flash('success','Form Submitted Successfully');
       return redirect()->route('Admission');
   }


   public function delete(request $request){
       $delete = Admission::where('id',$request->Delete)->first();
      
       $delete->delete();

       $request->session()->flash('success','Your Admission Deleted Successfully!');
       return redirect()->route('Admin/Admission');
   }


   public function editsession(request $request){
       Session::put('edit_id', $request->Edit);
       return redirect()->route('Admin/Admission/Edit');
   }

   public function edit(request $request){
         /*$cat_id = Category::orderBy('id','desc')->get();

        $sub_cat_id = SubCategory::orderBy('id','desc')->get();*/
       $edit_id = Session::get('edit_id');
       $edit = Admission::where('id',$edit_id)->first();
       return view('Admin.Admission.Add',compact('edit'/*'cat_id','sub_cat_id'*/));
   }


   public function update(request $request){
       $update_id  = $request->Update;
       $Testimonial = Testimonial::where('id',$update_id)->first();

       $Testimonial->Title = $request->Title;
       $Testimonial->Description = $request->Description;
       $Testimonial->University = $request->University;
       $Testimonial->Experience = $request->Experience;

       if($request->hasfile('Image'))
        {
           $file = $request->file('Image');
           $name=time().$file->getClientOriginalName();
           $filePath = 'images/' . $name;
           Storage::disk('s3')->put($filePath, file_get_contents($file));
           $Testimonial->Image = $name;
        }

       $Testimonial->save();
       $request->session()->flash('success','Your File Updated Successfully!');
       return redirect()->route('Admin/Testimonials');
   }
}
