<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller{

    public function addabout(Request $request){
        $data = new About;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('aboutimage',$imagename);
        $data ->image=$imagename;
      
        $data->title=$request->title;
        $data->short_description=$request->short_description;
        $data->description=$request->description;

        $data->foundername=$request->foundername;
        $data->founderdesignation=$request->founderdesignation;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
    
    }

    public function viewabout(){
        $data = About::all();
        return view("admin.about.viewabout",compact("data"));
    }
    public function deleteabout($id){
        $data=About::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editabout($id){
        $data=About::find($id);
        return view("admin.about.editabout",compact("data"));
    }
    public function updateabout(Request $request,$id){
        $data=About::find($id);
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('aboutimage',$imagename);
        $data ->image=$imagename;

      

        $data->title=$request->title;
        $data->short_description=$request->short_description;
        $data->description=$request->description;
        $data->foundername=$request->foundername;
        $data->founderdesignation=$request->founderdesignation;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }
}
