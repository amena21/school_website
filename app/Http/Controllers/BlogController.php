<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addblog(Request $request){
        $data = new Blog;

        $data->title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blogimage',$imagename);
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

    public function viewblog(){
        $data = Blog::all();
        return view("admin.blog.viewblog",compact("data"));
    }
    public function deleteblog($id){
        $data=Blog::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editblog($id){
        $data=Blog::find($id);
        return view("admin.blog.editblog",compact("data"));
    }
    public function updateblog(Request $request,$id){
        $data=Blog::find($id);

        $data->title=$request->title;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('blogimage',$imagename);
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
