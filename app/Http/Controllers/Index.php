<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\ActivitiesClassModel;
use App\Models\Blog;
use App\Models\EventsimageModel;
use App\Models\EventsModel;
use App\Models\Gallery;
use App\Models\Parents;
use App\Models\Teacher;
use App\Models\TimeModel;

use Illuminate\Http\Request;

class Index extends Controller
{
    public function viewindex(Request $request){
   
            
           
            $data = About::all()->first();
            $data1 = Contact::all()->first();
           
            $data2 = ActivitiesClassModel::all();
            $data3 = Blog::all();
            $data4 = EventsimageModel::all();
            $data5 = EventsModel::all();
            $data6 = Gallery::all();
            $data7 = Parents::all();
            $data8 = Teacher::all();
           
            $data9 = TimeModel::all();
            $data10 = Blog::all();
        
            // $user=User::where('id','=',Session('loginId'))->first();
            // $count = Cart::where('phone',$user->phone)->count();
            // $data9 = Cart::where('phone',$user->phone)->get();
           
           return view("index", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
    }  

    public function viewgallerypage(Request $request){
   
            
           
        $data = About::all()->first();
        $data1 = Contact::all()->first();
       
        $data2 = ActivitiesClassModel::all();
        $data3 = Blog::all();
        $data4 = EventsimageModel::all();
        $data5 = EventsModel::all();
        $data6 = Gallery::all();
        $data7 = Parents::all();
        $data8 = Teacher::all();
       
        $data9 = TimeModel::all();
        $data10 = Blog::all();
    
        // $user=User::where('id','=',Session('loginId'))->first();
        // $count = Cart::where('phone',$user->phone)->count();
        // $data9 = Cart::where('phone',$user->phone)->get();
       
       return view("gallery", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
} 

public function viewcontactpage(Request $request){
   
            
           
    $data = About::all()->first();
    $data1 = Contact::all()->first();
   
    $data2 = ActivitiesClassModel::all();
    $data3 = Blog::all();
    $data4 = EventsimageModel::all();
    $data5 = EventsModel::all();
    $data6 = Gallery::all();
    $data7 = Parents::all();
    $data8 = Teacher::all();
   
    $data9 = TimeModel::all();
    $data10 = Blog::all();

    // $user=User::where('id','=',Session('loginId'))->first();
    // $count = Cart::where('phone',$user->phone)->count();
    // $data9 = Cart::where('phone',$user->phone)->get();
   
   return view("contact", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
} 

public function viewaboutpage(Request $request){
   
            
           
    $data = About::all()->first();
    $data1 = Contact::all()->first();
   
    $data2 = ActivitiesClassModel::all();
    $data3 = Blog::all();
    $data4 = EventsimageModel::all();
    $data5 = EventsModel::all();
    $data6 = Gallery::all();
    $data7 = Parents::all();
    $data8 = Teacher::all();
   
    $data9 = TimeModel::all();
    $data10 = Blog::all();

    // $user=User::where('id','=',Session('loginId'))->first();
    // $count = Cart::where('phone',$user->phone)->count();
    // $data9 = Cart::where('phone',$user->phone)->get();
   
   return view("about", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
} 
public function viewblogpage(Request $request){
   
            
           
    $data = About::all()->first();
    $data1 = Contact::all()->first();
   
    $data2 = ActivitiesClassModel::all();
    $data3 = Blog::all();
    $data4 = EventsimageModel::all();
    $data5 = EventsModel::all();
    $data6 = Gallery::all();
    $data7 = Parents::all();
    $data8 = Teacher::all();
   
    $data9 = TimeModel::all();
    $data10 = Blog::all();

    // $user=User::where('id','=',Session('loginId'))->first();
    // $count = Cart::where('phone',$user->phone)->count();
    // $data9 = Cart::where('phone',$user->phone)->get();
   
   return view("blog", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
} 

public function viewblogdetailspage(Request $request){
   
            
           
    $data = About::all()->first();
    $data1 = Contact::all()->first();
   
    $data2 = ActivitiesClassModel::all();
    $data3 = Blog::all();
    $data4 = EventsimageModel::all();
    $data5 = EventsModel::all();
    $data6 = Gallery::all();
    $data7 = Parents::all();
    $data8 = Teacher::all();
   
    $data9 = TimeModel::all();
    $data10 = Blog::all();

    // $user=User::where('id','=',Session('loginId'))->first();
    // $count = Cart::where('phone',$user->phone)->count();
    // $data9 = Cart::where('phone',$user->phone)->get();
   
   return view("blog_details", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
} 

public function viewactivelearningpage(Request $request){
   
            
           
    $data = About::all()->first();
    $data1 = Contact::all()->first();
   
    $data2 = ActivitiesClassModel::all();
    $data3 = Blog::all();
    $data4 = EventsimageModel::all();
    $data5 = EventsModel::all();
    $data6 = Gallery::all();
    $data7 = Parents::all();
    $data8 = Teacher::all();
   
    $data9 = TimeModel::all();
    $data10 = Blog::all();

    // $user=User::where('id','=',Session('loginId'))->first();
    // $count = Cart::where('phone',$user->phone)->count();
    // $data9 = Cart::where('phone',$user->phone)->get();
   
   return view("active-learning", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
} 
}
