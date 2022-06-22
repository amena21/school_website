<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivitiesClassModel;

class ActivitiesClass extends Controller
{
    // public function class(){
    //     return view('admin.activities_class.addclass');
    // }
    public function addclass(Request $request){
        $data = new ActivitiesClassModel;

        $data->title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('activitiesclassimage',$imagename);
        $data->image=$imagename;

        $data->date=$request->date;
        $data->description1=$request->description1;
        $data->description2=$request->description2;
        $data->description3=$request->description3;
        $data->qoute=$request->qoute;
        $data->save();
        return redirect()->back()->with("success","Inserted successfully");
        // return view('admin.addabout');
       
    }

    public function viewclass(){
        $data = ActivitiesClassModel::all();
        return view("admin.activities_class.viewclass",compact("data"));
    }
    public function deleteclass($id){
        $data=ActivitiesClassModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editclass($id){
        $data=ActivitiesClassModel::find($id);
        return view("admin.activities_class.editclass",compact("data"));
    }
    public function updateclass(Request $request,$id){
        $data=ActivitiesClassModel::find($id);

        $data->title=$request->title;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('activitiesclassimage',$imagename);
        $data ->image=$imagename;

        $data->date=$request->date;
        $data->description1=$request->description1;
        $data->description2=$request->description2;
        $data->description3=$request->description3;
        $data->qoute=$request->qoute;

      
      
        $data->save();
        return redirect()->back();
    }
   
}
