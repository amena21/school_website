<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeModel;

class Time extends Controller
{
    public function time(){
        return view('admin.time.addopeningtime');
    }
    public function addopeningtime(Request $request){
        $data = new TimeModel;
        
        $data->day=$request->day;
        $data->open_time=$request->open_time;
        $data->close_time=$request->close_time;
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewopeningtime(){
        $data = TimeModel::all();
        return view("admin.time.viewopeningtime",compact("data"));
    }
    public function deleteopeningtime($id){
        $data=TimeModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editopeningtime($id){
        $data=TimeModel::find($id);
        return view("admin.time.editopeningtime",compact("data"));
    }
    public function updateopeningtime(Request $request,$id){
        $data=TimeModel::find($id);
       

        $data->day=$request->day;
        $data->open_time=$request->open_time;
        $data->close_time=$request->close_time;
        $data->save();
        return redirect()->back();
    }
   
}
