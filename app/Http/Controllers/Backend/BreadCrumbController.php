<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BreadCrumb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BreadCrumbController extends Controller
{
    public function index()
    {
        return view('backend.pages.breadcrumb.index', [
            'breadcrumbs' => BreadCrumb::all(),
        ]);
    }

    public function create()
    {
        return view('backend.pages.breadcrumb.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('uploads/img/breadcrumb/'), $avatarName);

        $imageUpload = new BreadCrumb();
        $imageUpload->title = 'uploads/img/breadcrumb/' . $avatarName;
        $imageUpload->save();
        return response()->json([
            'title' => 'Tebrikler!',
            'message' => 'Resimler başarıyla yüklendi.',
            'type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        File::delete(public_path(BreadCrumb::find($id)->title));
        BreadCrumb::find($id)->delete();
        return back()->with([
            'title' => 'Tebrikler!',
            'message' => 'Resim silme işlemi başarılı',
            'type' => 'success'
        ]);
    }

}
