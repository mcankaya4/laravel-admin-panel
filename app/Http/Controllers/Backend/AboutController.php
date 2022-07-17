<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function edit()
    {
        return view('backend.pages.about.edit', [
            'about' => About::findOrFail(1),
            'skills' => Skill::all(),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'short_desc' => 'required',
            'desc' => 'required',
            'page_title' => 'required',
            'page_desc' => 'required',
            'page_key' => 'required',
        ]);

        $update_item = About::find(1);
        $update_item->title = $request->title;
        $update_item->desc = $request->desc;
        $update_item->short_desc = $request->short_desc;
        $update_item->short_title = $request->short_title;
        $update_item->page_title = $request->page_title;
        $update_item->page_desc = $request->page_desc;
        $update_item->page_key = $request->page_key;
        if ($request->image) {
            File::delete(public_path($update_item->image));

            $extension = $request->image->getClientOriginalExtension();
            $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;

            Image::make($request->image)
                ->resize(523, 605)
                ->save('uploads/img/about/' . $filename);
            $update_item->image = 'uploads/img/about/' . $filename;
        }
        $update_item->save();


        Skill::truncate();
        foreach ($request->skill_title as $k => $t){
            Skill::create([
                'title' => $t,
                'value' => $request->skill_value[$k]
            ]);
        }


        return redirect()->route('admin.about.edit')->with([
            'title' => 'Tebrikler!',
            'message' => 'Hakkımızda sayfası güncelledi.',
            'type' => 'success'
        ]);
    }
}
