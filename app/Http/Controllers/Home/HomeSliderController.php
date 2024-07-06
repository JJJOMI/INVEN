<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Image;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
//use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function HomeSlider()
    {
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeslide'));

        // Your existing code
    }

    public function UpdateSlider(Request $request)
    {
        $slide_id = $request->id;

        try {
            if ($request->hasFile('home_slide')) {
                $image = $request->file('home_slide');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

                $imagePath = public_path('upload/home_slide/' . $name_gen);

                Log::info('Saving image at: ' . $imagePath);

                // $image->resize(636, 852)->save($imagePath);

                // Image::make($image)->resize(636, 852)->save($imagePath);

                Log::info('Image saved successfully: ' . $imagePath);
                $image->move(public_path('upload/home_slide'), $name_gen);

                $save_url = 'upload/home_slide/' . $name_gen;

                HomeSlide::findOrFail($slide_id)->update([
                    'title' => $request->title,
                    'short_title' => $request->short_title,
                    'video_url' => $request->video_url,
                    'home_slide' => $save_url,
                ]);

                $notification = [
                    'message' => 'Home Slide Updated with Image Successfully',
                    'alert-type' => 'success'
                ];
            } else {
                HomeSlide::findOrFail($slide_id)->update([
                    'title' => $request->title,
                    'short_title' => $request->short_title,
                    'video_url' => $request->video_url,
                ]);

                $notification = [
                    'message' => 'Home Slide Updated without Image Successfully',
                    'alert-type' => 'success'
                ];
            }
        } catch (\Exception $e) {
            Log::error('Error updating home slide: ' . $e->getMessage());

            $notification = [
                'message' => 'There was an error updating the home slide.',
                'alert-type' => 'error'
            ];
        }

        return redirect()->back()->with($notification);
    }

}
