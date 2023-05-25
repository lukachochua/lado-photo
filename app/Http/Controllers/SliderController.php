<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    
    public function show()
    {
        return view('admin.slider', [
            'slider' => Slider::all()
        ]);
    }

    public function store(Request $request)
    {
        $slider = new Slider();

        $attributes = $this->validatePost();


        $path = $attributes['photo']->store('public/slider');
        $slider->photo = basename($path);
        $slider->user_id = auth()->user()->id;
        $slider->save();


        return redirect(route('admin.slider'))->with('success', 'Slider image added successfully!');
    }

    public function sliderGallery()
    {
        $sliders = Slider::all();

        return view('admin.slidergallery', [
            'sliders' => $sliders
        ]);
    }

    public function destroy(Slider $slider)
    {
        Storage::delete(str_replace('/storage', 'public', $slider->photo));

        $slider->delete();

        return redirect(route('admin.slidergallery', $slider))->with('success', 'Slider photo deleted successfully!');
    }

    protected function validatePost(?Slider $slider = null)
    {
        $slider ??= new Slider;

        return  request()->validate([
            'photo' => $slider->exists ? ['image'] : 'required|image',
        ]);
    }

}
