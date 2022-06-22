<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('admin.contact.addcontact');
    }
    public function addcontact(Request $request){
        $data = new Contact;
        // $image = $request ->image;
        // $imagename =time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('aboutimage',$imagename);
        // $data ->image=$imagename;

        $data->title=$request->title;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->fblink=$request->fblink;
        $data->instagramlink=$request->instagramlink;
        $data->youtubelink=$request->youtubelink;

        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewcontact(){
        $data = Contact::all();
        return view("admin.contact.viewcontact",compact("data"));
    }
    public function deletecontact($id){
        $data=Contact::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editcontact($id){
        $data=Contact::find($id);
        return view("admin.contact.editcontact",compact("data"));
    }
    public function updatecontact(Request $request,$id){
        $data=Contact::find($id);
       

        $data->title=$request->title;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->fblink=$request->fblink;
        $data->instagramlink=$request->instagramlink;
        $data->youtubelink=$request->youtubelink;
        $data->save();
        return redirect()->back();
    }
  
}

