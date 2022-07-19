<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function edit()
    {
        return view('backend.pages.slider.edit', [
            'slider' => Slider::findOrFail(1)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'video_url' => 'required',
        ]);

        $update_item = Slider::find($id);
        $update_item->title = $request->title;
        $update_item->desc = $request->desc;
        $update_item->video_url = $request->video_url;
        if ($request->image) {
            $request->validate([
                'image' => 'mimes:png,jpg,jpeg'
            ]);
            File::delete(public_path($update_item->image));
            $extension = $request->image->getClientOriginalExtension();
            $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;

            Image::make($request->image)
                ->resize(636, 852)
                ->save('uploads/img/slider/' . $filename);
            $update_item->image = 'uploads/img/slider/' . $filename;
        }
        $update_item->save();

        return redirect()->route('admin.slider.edit')->with([
            'title' => 'Tebrikler!',
            'message' => 'Slider sayfası güncellendi',
            'type' => 'success'
        ]);
    }
}
