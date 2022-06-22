<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function addteacher(Request $request){
        $data = new Teacher;

       
        $data->name=$request->name;
        $data->designation=$request->designation;
        
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('teacherimage',$imagename);
        $data->image=$imagename;

     
      
        $data->save();
        return redirect()->back()->with("success","Inserted successfully");
        // return view('admin.addabout');
       
    }

    public function viewteacher(){
        $data = Teacher::all();
        return view("admin.teacher.viewteacher",compact("data"));
    }
    public function deleteteacher($id){
        $data=Teacher::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editteacher($id){
        $data=Teacher::find($id);
        return view("admin.teacher.editteacher",compact("data"));
    }
    public function updateteacher(Request $request,$id){
        $data=Teacher::find($id);

        $data->name=$request->name;
        $data->designation=$request->designation;
     
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('teacherimage',$imagename);
        $data ->image=$imagename;

       

      
      
        $data->save();
        return redirect()->back();
    }
}
