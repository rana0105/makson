<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use Intervention\Image\ImageManager;
use Storage;

class SliderController extends Controller
{
    
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('backend.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.slider.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if($image = $request->file('image')) {
            $sliderImg = Storage::disk('uploads')->put('slider',$image);
        }
        Slider::create($request->except('image')+['image' => $sliderImg]);
        return redirect()->route('slider.index')->with('success', 'Slider picture created successfully !');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);
        $slider = Slider::find($id);
        // for slider image update
        $sliderImg = $slider->image;
        if($image = $request->file('image')){
            $sliderImg = Storage::disk('uploads')->put('slider',$image);
            Storage::disk('uploads')->delete($slider->image);
        }
        // slider info update
        $slider->update($request->except('image')+['image' => $sliderImg]);

        return redirect()->route('slider.index')->with('success', 'Slider Image upadated successfully !');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $copy = $slider;
        
        if($slider->delete())
            Storage::disk('uploads')
                ->delete($copy->image);
        return redirect()->route('slider.index')->with('danger', 'Slider Image deleted successfully !');
    }
}
