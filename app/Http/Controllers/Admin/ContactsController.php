<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Auth;
class ContactsController extends Controller
{
    public function index(){
        if(Auth::user()->role=='admin'){
        $data = Contact::orderBy('created_at','desc')->get();
        return view("Admin/Contact/Index", compact("data"));
    }
    else{
        return redirect()->route('Index');
    }
    }
	
    public function ContactsRemark(Request $request){
        if(Auth::user()->role=='admin'){
        $id = $request->ContactsRemarkId;
        $update = Contact::where('id',$id)->first();
        $update->Remark =$request->ContactsRemark;
        $update->save();
        return back()->with('success', 'Successfully Remarked It.');
        }
        else{
        return redirect()->route('Index');
    }
    }

    
}
