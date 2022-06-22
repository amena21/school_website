<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function gallery(){
        return view('admin.gallery.addgallery');
    }
    public function addgallery(Request $request){
        $data = new Gallery;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('galleryimage',$imagename);
        $data ->image=$imagename;

        $data->title=$request->title;
       
        $data->save();
        return redirect()->back();
        // return view('admin.addabout')->with("success","Inserted successfully");
       
    }

    public function viewgallery(){
        $data = Gallery::all();
        return view("admin.gallery.viewgallery",compact("data"));
    }
    public function deletegallery($id){
        $data=Gallery::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editgallery($id){
        $data=Gallery::find($id);
        return view("admin.gallery.editgallery",compact("data"));
    }
    public function updategallery(Request $request,$id){
        $data=Gallery::find($id);
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('galleryimage',$imagename);
        $data ->image=$imagename;

        $data->title=$request->title;
        
        $data->save();
        return redirect()->back();
    }
   
}

