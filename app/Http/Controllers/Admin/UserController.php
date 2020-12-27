<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;

class UserController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
    	$users = User::orderBy('id','desc')->get();
    	return view('Admin.User.Index',compact('users'));
    }

    else{
        return redirect()->route('Index');
    }
    }

    public function create(request $request){
        if(Auth::user()->role=='admin'){
    	return view('Admin.User.Add');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function store(request $request){
        if(Auth::user()->role=='admin'){
    	$user = new User;
    	$user->name = $request->Name;
    	$user->email = $request->Email;
    	$user->mobile = $request->Mobile;
    	$user->password = Hash::make($request->Password);
    	$user->role = $request->Role;
    	$user->Status = $request->Status;
    	$user->save();
    	$request->session()->flash('success','User Submited Successfully!');
    	return redirect()->route('Admin/Users');
    }
    else{
        return redirect()->route('Index');
    }
}

    public function editsession(request $request){
        if(Auth::user()->role=='admin'){
    	Session::put('edit_id',$request->Edit);
    	return redirect()->route('Admin/Users/Edit');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function edit(request $request){
        if(Auth::user()->role=='admin'){
    	$edit_id = Session::get('edit_id');
    	$edit = User::where('id',$edit_id)->first();
    	return view('Admin.User.Add',compact('edit'));
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function update(request $request){
           if(Auth::user()->role=='admin'){
    	$user = User::where('id',$request->Update)->first();
    	$user->name = $request->Name;
    	$user->email = $request->Email;
    	$user->mobile = $request->Mobile;
    	$user->password = Hash::make($request->Password);
    	$user->role = $request->Role;
    	$user->Status = $request->Status;
    	$user->save();
    	$request->session()->flash('success','User Updated Successfully!');
    	return redirect()->route('Admin/Users');
    }
    else{
        return redirect()->route('Index');
    }
    }

    public function delete(request $request){
        if(Auth::user()->role=='admin'){
    	User::where('id',$request->Delete)->delete();
    	$request->session()->flash('success','User Removed!');
    	return redirect()->route('Admin/Users');
    }
    else{
        return redirect()->route('Index');
    }
    }
}
