<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SliderModel;

class Slider extends Controller
{
    public function newslider(){
        return view('admin.slider.addslider');
    }
    public function addslider(Request $request){

    //     $this->validate($request, [
    //         'image' => 'required',
    //         'image.*' => 'image'
    // ]);




//     $this->validate($request, [
//         'filenames' => 'required',
//         'filenames.*' => 'image'
// ]);

// $files = [];
// if($request->hasfile('filenames'))
//  {
//     foreach($request->file('filenames') as $file)
//     {
//         $name = time().rand(1,100).'.'.$file->extension();
//         $file->move(public_path('files'), $name);  
//         $files[] = $name;  
//     }
//  }

//  $file= new SliderModel();
//  $file->filenames = $files;
//  $file->save();

// return back()->with('success', 'Data Your files has been successfully added');
    // $files = [];
    // if($request->hasfile('image'))
    //  {
    //     foreach($request->file('image') as $data)
    //     {
    //         $name = time().rand(1,100).'.'.$data->extension();
    //         $data->move(public_path('sliderimage'), $name);  
    //         $files[] = $name;  
    //     }
    //  }

    //  $file= new File();
    //  $file->filenames = $files;
    //  $file->save();



      

        // dd($request->file());

     $size = $request->file('image')->getSize();
     $name = $request->file('image')->getClientOriginalName();
     
     $request->file('image')->storeAs('public/sliderimage/',$name);

     $size2 = $request->file('image2')->getSize();
     $name2 = $request->file('image2')->getClientOriginalName();
     
     $request->file('image2')->storeAs('public/sliderimage/',$name);
        $data = new SliderModel();

        // $data->image = $files;
        $data->save();
        return redirect()->back();
        // $image=$request->image;
        // $imagename= time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('sliderimage',$imagename);
        // $data->image=$imagename;

        // $image2=$request->image2;
        // $image2name=time().'.'.$image2->getClientOriginalExtension();
        // $request->image2->move('sliderimage',$image2name);
        // $data->image2=$image2name;

       

        // $data=array('image'=>$imagename,"image2"=>$image2);
        // $image3 = $request ->image3;
        // $image3name =time().'.'.$image3->getClientOriginalExtension();
        // $request->image3->move('sliderimage',$image3name);
        // $data ->image3=$image3name;

        // $image4 = $request ->image4;
        // $image4name =time().'.'.$image4->getClientOriginalExtension();
        // $request->image4->move('sliderimage',$image4name);
        // $data ->image4=$image4name;

        // $image5 = $request ->image5;
        // $image5name =time().'.'.$image5->getClientOriginalExtension();
        // $request->image5->move('sliderimage',$image5name);
        // $data ->image5=$image5name;

        // $image6 = $request ->image6;
        // $image6name =time().'.'.$image6->getClientOriginalExtension();
        // $request->image6->move('sliderimage',$image6name);
        // $data ->image6=$image6name;

        // $image7 = $request ->image7;
        // $image7name =time().'.'.$image7->getClientOriginalExtension();
        // $request->image7->move('sliderimage',$image7name);
        // $data ->image7=$image7name;

        // $image8 = $request ->image8;
        // $image8name =time().'.'.$image8->getClientOriginalExtension();
        // $request->image8->move('sliderimage',$image8name);
        // $data ->image8=$image8name;

        // $image9 = $request ->image9;
        // $image9name =time().'.'.$image9->getClientOriginalExtension();
        // $request->image9->move('sliderimage',$image9name);
        // $data ->image9=$image9name;

        // $image10 = $request ->image10;
        // $image10name =time().'.'.$image10->getClientOriginalExtension();
        // $request->image10->move('sliderimage',$image10name);
        // $data ->image10=$image10name;

        // $image11 = $request ->image11;
        // $image11name =time().'.'.$image11->getClientOriginalExtension();
        // $request->image11->move('sliderimage',$image11name);
        // $data ->image11=$image11name;


    //    var_dump($data);
    //    die();
    //     $data->save();
    //     return redirect()->back();
        // return view('admin.addslider')->with("success","Inserted successfully");
       
    }

    public function viewslider(){
        $data = SliderModel::all();
        return view("admin.slider.viewslider",compact("data"));
    }
    public function deleteslider($id){
        $data=SliderModel::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editslider($id){
        $data=SliderModel::find($id);
        return view("admin.slider.editslider",compact("data"));
    }
    public function updateslider(Request $request,$id){
        $data=SliderModel::find($id);
        $image = $request ->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('sliderimage',$imagename);
        $data ->image=$imagename;

        $image2 = $request ->image2;
        $imagename =time().'.'.$image2->getClientOriginalExtension();
        $request->image2->move('sliderimage',$imagename);
        $data ->image2=$imagename;

        $data->website_name=$request->website_name;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

  
}
