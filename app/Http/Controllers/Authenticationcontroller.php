<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
use App\Models\Authentication;
use Hash;
use Session;

class Authenticationcontroller extends Controller
{
  
   

        public function login(Request $request){
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
           
        
                    $request->validate([
            
                            'email'=>'required|email',
                        
                            'password'=>'required|min:5|max:12'
                                    ]);
                    $user = Authentication::where('email','=',$request->email)->first();
                    
                    if($user){

                        $pass = Authentication::where('password','=',$request->password)->first();
                        if($pass){
                      
                        // $request->session()->put('loginId',$user->id);
                        // $role = $user->role;
                        // $count = Cart::where('phone',$user->phone)->count();
                        // $data9 = Cart::where('phone',$user->phone)->get();
                      
                        return view('admin.dashboard');
                        }else{
                            return view("index", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
                        }
                        
                    //    if(Auth::id()){

                        // $role = DB::table('users')->get();
                        //  $role->role;
                        //   $role = Auth::users()->role ;
                        // $role = User::where('role','==','0');
                        // if($role =='1'){
                  
                    }
                        else{
                            
                            return view("index", compact("data","data1","data2","data3","data4","data5","data6","data7","data8","data9","data10"));
                           
                        }
                        // }
                //   return redirect('dashboard');
                        // }else{
                        //     return back()->with('fail','Password do not match.');
                        // }

                    }

                    public function logout(Request $request){

                        $request->session()->forget('id');
                        $request->session()->forget('name');
                        return redirect("");
                    }
                
}


  

 



