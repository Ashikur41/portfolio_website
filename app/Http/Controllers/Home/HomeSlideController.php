<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;

class HomeSlideController extends Controller
{
    public function HomeSlider()
    {
        $homeskider= HomeSlide::find(1);

        return view('frontend.home_slide.home_slider_all',compact('homeskider'));
    }

    public function UpdateSlider(Request $request)
    {
       $slider_id=$request->id;

       $image=$request->file('home_slide');
       $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       $image->move(public_path('upload/home_slide/'),$name_gen);
       $save_url='upload/home_slide/'.$name_gen;

        HomeSlide::findOrFail($slider_id)->update([
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'video_url'=>$request->video_url,
            'home_slide'=>$save_url,
        ]);
            $notifaction = array(
                'message' => 'Home Slide Updated with Image Successfully',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notifaction);

       }
    
}
