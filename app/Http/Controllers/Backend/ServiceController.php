<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function index()
    {
        return view('backend.pages.service.index', [
            'services' => Service::all(),
        ]);
    }

    public function create()
    {
        return view('backend.pages.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'short_desc' => 'required|max:255',
            'icon' => 'mimes:png|required',
            'image' => 'mimes:jpg,jpeg,png|required'
        ]);

        $extension = $request->image->getClientOriginalExtension();
        $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;
        Image::make($request->image)
            ->resize(850, 430)
            ->save('uploads/img/service/' . $filename);


        $extension2 = $request->icon->getClientOriginalExtension();
        $filename2 = date('YmdHis-') . hexdec(uniqid()) . "." . $extension2;
        Image::make($request->icon)
            ->resize(82, 82)
            ->save('uploads/img/service/' . $filename2);

        Service::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'desc' => $request->desc,
            'short_desc' => $request->short_desc,
            'image' => 'uploads/img/service/' . $filename,
            'icon' => 'uploads/img/service/' . $filename2
        ]);

        return redirect()->route('admin.service.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Yeni hizmet eklendi.',
            'type' => 'success'
        ]);
    }

    public function edit($id)
    {
        return view('backend.pages.service.edit',[
            'service' => Service::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'short_desc' => 'required|max:255',
        ]);

        $service = Service::find($id);

        if ($request->image){
            File::delete(public_path($service->image));
            $request->validate([
                'image' => 'mimes:jpg,jpeg,png',
            ]);

            $extension = $request->image->getClientOriginalExtension();
            $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;
            Image::make($request->image)
                ->resize(850, 430)
                ->save('uploads/img/service/' . $filename);

            $service->update([
                'image' => 'uploads/img/service/' . $filename
            ]);
        }

        if ($request->icon){
            File::delete(public_path($service->icon));
            $request->validate([
                'icon' => 'mimes:png',
            ]);

            $extension = $request->icon->getClientOriginalExtension();
            $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;
            Image::make($request->icon)
                ->resize(82, 82)
                ->save('uploads/img/service/' . $filename);

            $service->update([
                'icon' => 'uploads/img/service/' . $filename
            ]);
        }

        Service::find($id)->update([
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'desc' => $request->desc,
            'short_desc' => $request->short_desc,
        ]);

        return redirect()->route('admin.service.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Hizmet güncellendi.',
            'type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        File::delete(public_path(Service::find($id)->image));
        File::delete(public_path(Service::find($id)->icon));
        Service::find($id)->delete();
        return back()->with([
            'title' => 'Tebrikler!',
            'message' => 'Hizmet silindi.',
            'type' => 'success'
        ]);
    }
}
