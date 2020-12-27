<?php

namespace App\Http\Controllers\Admin;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Session;
use Storage;
use Auth;

class TeamController extends Controller
{
    public function index(){
      if(Auth::user()->role=='admin'){
      $data = Team::orderBy('id','desc')->get();
      return view('Admin.Team.Index',compact('data'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function create(){
      if(Auth::user()->role=='admin'){
      return view('Admin.Team.Add');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
      if(Auth::user()->role=='admin'){
      $data = new Team;
      $data->Name = $request->Name;
      $data->Designation = $request->Designation;
      $data->AboutMe = $request->AboutMe;
      $data->Experience = $request->Experience;
      $data->Facebook = $request->Facebook;
      $data->Instagram = $request->Instagram;
      $data->Twitter = $request->Twitter;
      $data->LinkedIn = $request->LinkedIn;
      $data->AreaOfExperience = $request->AreaOfExperience;
      $data->Education = $request->Education;
      $data->Status = $request->Status;
      if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('team');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

      $data->save();
      $request->session()->flash('success','Your Team Uploaded successfully!');
      return redirect()->route('Admin/Team');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function delete(request $request){
      if(Auth::user()->role=='admin'){
      $delete = Team::where('id',$request->Delete)->first();
      $delete->delete();
      $request->session()->flash('delete','Your File Deleted Successfully!');
      return redirect()->route('Admin/Team');
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function editsession(request $request){
      if(Auth::user()->role=='admin'){
      Session::put('edit_id', $request->Edit);
      return redirect()->route('Admin/Team/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
      if(Auth::user()->role=='admin'){
      $edit_id = Session::get('edit_id');
      $edit = Team::where('id',$edit_id)->first();
      return view('Admin.Team.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }


    public function update(request $request){
      if(Auth::user()->role=='admin'){
      $update_id  = $request->Update;
      $data = Team::where('id',$update_id)->first();
        $data->Name = $request->Name;
      $data->Designation = $request->Designation;
      $data->AboutMe = $request->AboutMe;
      $data->Experience = $request->Experience;
      $data->Facebook = $request->Facebook;
      $data->Instagram = $request->Instagram;
      $data->Twitter = $request->Twitter;
      $data->LinkedIn = $request->LinkedIn;
      $data->AreaOfExperience = $request->AreaOfExperience;
      $data->Education = $request->Education;
      $data->Status = $request->Status;
      if($request->hasfile('Image'))
         {
            $file = $request->file('Image');
            $name = time().$file->getClientOriginalName();
            $filePath = public_path('team');
            $file->move($filePath,$name);
            $data->Image = $name;
         }

        $data->save();
        $request->session()->flash('update','Your File Uploaded successfully!');
        return redirect()->route('Admin/Team');
    }

    else{
        return redirect()->route('Index');
    }
  }
}
