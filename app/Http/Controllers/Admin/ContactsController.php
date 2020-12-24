<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
class ContactsController extends Controller
{
    public function index(){
        $data = Contact::orderBy('created_at','desc')->get();
        return view("Admin/Contact/Index", compact("data"));
    }
	
    public function ContactsRemark(Request $request){
        $id = $request->ContactsRemarkId;

        $update = Contact::where('id',$id)->first();
        $update->Remark =$request->ContactsRemark;
        $update->save();
        return back()->with('success', 'Successfully Remarked It.');
    }

    
}
