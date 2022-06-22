<?php

namespace App\Http\Controllers;
use App\Models\EventsModel;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function addevents(Request $request){
        $data = new EventsModel;

        $data->title=$request->title;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('eventsimage',$imagename);
        $data->image=$imagename;

        $data->date=$request->date;
        $data->description=$request->description;
      
        $data->save();
        return redirect()->back()->with("success","Inserted successfully");
        // return view('admin.addabout');
       
    }

    public function viewevents(){
        $data = EventsModel::all();
        return view("admin.events.viewevents",compact("data"));
    }
    public function deleteevents($id){
        $data=EventsModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editevents($id){
        $data=EventsModel::find($id);
        return view("admin.events.editevents",compact("data"));
    }
    public function updateevents(Request $request,$id){
        $data=EventsModel::find($id);

        $data->title=$request->title;
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('eventsimage',$imagename);
        $data ->image=$imagename;

        $data->date=$request->date;
        $data->description=$request->description;
     

      
      
        $data->save();
        return redirect()->back();
    }
}
