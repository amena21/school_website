<?php

namespace App\Http\Controllers;
use App\Models\EventsimageModel;
use Illuminate\Http\Request;

class EventsimageController extends Controller
{
    public function addeventsimage(Request $request){
        $data = new EventsimageModel;

      

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('eventsimgimage',$imagename);
        $data->image=$imagename;

      
      
        $data->save();
        return redirect()->back()->with("success","Inserted successfully");
        // return view('admin.addabout');
       
    }

    public function vieweventsimage(){
        $data = EventsimageModel::all();
        return view("admin.events_image.vieweventsimage",compact("data"));
    }
    public function deleteeventsimage($id){
        $data=EventsimageModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editeventsimage($id){
        $data=EventsimageModel::find($id);
        return view("admin.events_image.editeventsimage",compact("data"));
    }
    public function updateeventsimage(Request $request,$id){
        $data=EventsimageModel::find($id);

        
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('eventsimgimage',$imagename);
        $data ->image=$imagename;

      
     

      
      
        $data->save();
        return redirect()->back();
    }
}
