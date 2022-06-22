<?php

namespace App\Http\Controllers;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function addparents(Request $request){
        $data = new Parents;
        

        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewparents(){
        $data = Parents::all();
        return view("admin.parents.viewparents",compact("data"));
    }
    public function deleteparents($id){
        $data=Parents::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editparents($id){
        $data=Parents::find($id);
        return view("admin.parents.editparents",compact("data"));
    }
    public function updateparents(Request $request,$id){
        $data=Parents::find($id);
        

        $data->name=$request->name;
        $data->designation=$request->designation;
        $data->message=$request->message;
        $data->save();
        return redirect()->back();
    }
  

}
