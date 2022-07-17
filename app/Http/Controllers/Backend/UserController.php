<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.pages.user.index');
    }

    public function edit()
    {
        return view('backend.pages.user.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $update_item = User::find(Auth::id());
        $update_item->name = $request->name;
        $update_item->email = $request->email;
        if ($request->image) {
            File::cleanDirectory(public_path('uploads/img/user'));

            $extension = $request->image->getClientOriginalExtension();
            $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;

            Image::make($request->image)
                ->resize(256, 256)
                ->save('uploads/img/user/' . $filename);
            $update_item->image = 'uploads/img/user/' . $filename;
        }
        $update_item->save();

        return redirect()->route('admin.user.index')->with([
            'title' => 'Tebrikler',
            'message' => 'Profil bilgileri güncellendi.',
            'type' => 'success'
        ]);
    }

    public function editpassword()
    {
        return view('backend.pages.user.edit-password');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return redirect()->route('admin.user.edit.password')->with([
                'title' => 'Hata!',
                'message' => 'Eski şifrenizi yanlış girdiniz.',
                'type' => 'error'
            ]);
        }

        User::find(Auth::id())->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->route('admin.user.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Şifre değiştirildi.',
            'type' => 'success'
        ]);
    }
}
