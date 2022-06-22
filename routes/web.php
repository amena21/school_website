<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Slider;
use App\Http\Controllers\ActivitiesClass;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventsimageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ParentsController;
use App\Http\Controllers\TeacherController;

use App\Http\Controllers\Time;
use App\Http\Controllers\Index;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Authenticationcontroller;



use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::view('/admin','admin.dashboard');
Route::view('/addslider','admin.slider.addslider');
Route::view('/viewslider','admin.slider.viewslider');
// Route::view('/addslider','admin.activities_class.addclass');

// Route::view('/addclass','admin.activities_class.addclass');
Route::view('/index','index');
Route::view('/about','about');
Route::view('/gallery','gallery');
Route::view('/blog','blog');
Route::view('/contact','contact'); 
Route::view('/active-learning','active-learning');
Route::view('/danceclass','danceclass');
Route::view('/musicclass','musicclass');
Route::view('/ptclass','ptclass');
Route::view('/blog_details','blog_details');

//slider
// Route::get('/slider',[Slider::class,'slider'])->name('slider');
Route::post('/addslider',[Slider::class,'addslider'])->name('addslider');
Route::get('/viewslider',[Slider::class,'viewslider'])->name('viewslider');
Route::get('/deleteslider/{id}',[Slider::class,'deleteslider']);
Route::get('/editslider/{id}',[Slider::class,'editslider']);
Route::post('/updateslider/{id}',[Slider::class,'updateslider']);;

//activities class

Route::view('/addclass','admin.activities_class.addclass');
Route::view('/viewclass','admin.activities_class.viewclass');

// Route::get('/class',[ActivitiesClass::class,'class'])->name('class');
Route::post('/addclass',[ActivitiesClass::class,'addclass'])->name('addclass');
Route::get('/viewclass',[ActivitiesClass::class,'viewclass'])->name('viewclass');
Route::get('/deleteclass/{id}',[ActivitiesClass::class,'deleteclass']);
Route::get('/editclass/{id}',[ActivitiesClass::class,'editclass']);
Route::post('/updateclass/{id}',[ActivitiesClass::class,'updateclass']);

//about

Route::view('/addabout','admin.about.addabout');
Route::post('/addabout',[AboutController::class,'addabout'])->name('addabout');
Route::get('/viewabout',[AboutController::class,'viewabout'])->name('viewabout');
Route::get('/deleteabout/{id}',[AboutController::class,'deleteabout']);
Route::get('/editabout/{id}',[AboutController::class,'editabout']);
Route::post('/updateabout/{id}',[AboutController::class,'updateabout']);

//Events 

Route::view('/addevents','admin.events.addevents');
// Route::view('/viewevents','admin.events.viewevents');
Route::post('/addevents',[EventsController::class,'addevents'])->name('addevents');
Route::get('/viewevents',[EventsController::class,'viewevents'])->name('viewevents');
Route::get('/deleteevents/{id}',[EventsController::class,'deleteevents']);
Route::get('/editevents/{id}',[EventsController::class,'editevents']);
Route::post('/updateevents/{id}',[EventsController::class,'updateevents']);

//Events image
Route::view('/addeventsimage','admin.events_image.addeventsimage');
// Route::view('/viewevents','admin.events.viewevents');
Route::post('/addeventsimage',[EventsimageController::class,'addeventsimage'])->name('addeventsimage');
Route::get('/vieweventsimage',[EventsimageController::class,'vieweventsimage'])->name('vieweventsimage');
Route::get('/deleteeventsimage/{id}',[EventsimageController::class,'deleteeventsimage']);
Route::get('/editeventsimage/{id}',[EventsimageController::class,'editeventsimage']);
Route::post('/updateeventsimage/{id}',[EventsimageController::class,'updateeventsimage']);
//gallery
Route::view('/addgallery','admin.gallery.addgallery');
// Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
Route::post('/addgallery',[GalleryController::class,'addgallery'])->name('addgallery');
Route::get('/viewgallery',[GalleryController::class,'viewgallery'])->name('viewgallery');
Route::get('/deletegallery/{id}',[GalleryController::class,'deletegallery']);
Route::get('/editgallery/{id}',[GalleryController::class,'editgallery']);
Route::post('/updategallery/{id}',[GalleryController::class,'updategallery']);

//Blog



Route::view('/addblog','admin.blog.addblog');
// Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::post('/addblog',[BlogController::class,'addblog'])->name('addblog');
Route::get('/viewblog',[BlogController::class,'viewblog'])->name('viewblog');
Route::get('/deleteblog/{id}',[BlogController::class,'deleteblog']);
Route::get('/editblog/{id}',[BlogController::class,'editblog']);
Route::post('/updateblog/{id}',[BlogController::class,'updateblog']);


//Contact
Route::view('/addcontact','admin.contact.addcontact');
Route::get('/admincontact',[ContactController::class,'contact'])->name('contact');
Route::post('/addcontact',[ContactController::class,'addcontact'])->name('addcontact');
Route::get('/viewcontact',[ContactController::class,'viewcontact'])->name('viewcontact');
Route::get('/deletecontact/{id}',[ContactController::class,'deletecontact']);
Route::get('/editcontact/{id}',[ContactController::class,'editcontact']);
Route::post('/updatecontact/{id}',[ContactController::class,'updatecontact']);

//about 
// Route::view('/addabout','admin.about.addabout');
Route::post('/addabout',[AboutController::class,'addabout'])->name('addabout');
Route::get('/viewabout',[AboutController::class,'viewabout'])->name('viewabout');
Route::get('/deleteabout/{id}',[AboutController::class,'deleteabout']);
Route::get('/editabout/{id}',[AboutController::class,'editabout']);
Route::post('/updateabout/{id}',[AboutController::class,'updateabout']);
//parents
Route::view('/addparents','admin.parents.addparents');
Route::post('/addparents',[ParentsController::class,'addparents'])->name('addparents');
Route::get('/viewparents',[ParentsController::class,'viewparents'])->name('viewparents');
Route::get('/deleteparents/{id}',[ParentsController::class,'deleteparents']);
Route::get('/editparents/{id}',[ParentsController::class,'editparents']);
Route::post('/updateparents/{id}',[ParentsController::class,'updateparents']);

//teacher
Route::view('/addteacher','admin.teacher.addteacher');
Route::post('/addteacher',[TeacherController::class,'addteacher'])->name('addteacher');
Route::get('/viewteacher',[TeacherController::class,'viewteacher'])->name('viewteacher');
Route::get('/deleteteacher/{id}',[TeacherController::class,'deleteteacher']);
Route::get('/editteacher/{id}',[TeacherController::class,'editteacher']);
Route::post('/updateteacher/{id}',[TeacherController::class,'updateteacher']);

//class time
Route::view('/addopeningtime','admin.time.addopeningtime');
Route::post('/addopeningtime',[Time::class,'addopeningtime']);
Route::get('/viewopeningtime',[Time::class,'viewopeningtime'])->name('viewopeningtime');
Route::get('/deleteopeningtime/{id}',[Time::class,'deleteopeningtime']);
Route::get('/editopeningtime/{id}',[Time::class,'editopeningtime']);
Route::post('/updateopeningtime/{id}',[Time::class,'updateopeningtime']);


Route::get('/index',[Index::class,'viewindex']);
Route::get('/',[Index::class,'viewindex']);
Route::get('/about',[Index::class,'viewaboutpage']);
Route::get('/contact',[Index::class,'viewcontactpage']);
Route::get('/gallery',[Index::class,'viewgallerypage']);
Route::get('/blog',[Index::class,'viewblogpage']);
Route::get('/blog_details',[Index::class,'viewblogdetailspage']);
Route::get('/active-learning',[Index::class,'viewactivelearningpage']);

Route::view('/login','login');
// Route::view('/login',[Authenticationcontroller::class,'loginUser']);
// Route::get('/login','login');
// Route::get('/login',[Authenticationcontroller::class,'loginUser']);
Route::post('/login',[Authenticationcontroller::class,'login']);

Route::get('/logout',[Authenticationcontroller::class,'logout'])->name('logout');
