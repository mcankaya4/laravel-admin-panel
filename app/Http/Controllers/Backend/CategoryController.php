<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.pages.category.index', [
            'parent_categories' => Category::where('parent_id', 0)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'parent_id' => 'required',
        ]);

        Category::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'parent_id' => $request->parent_id
        ]);

        return redirect()->route('admin.category.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Yeni kategori eklendi.',
            'type' => 'success'
        ]);
    }

    public function edit($id){
        return view('backend.pages.category.edit', [
            'category' => Category::findOrFail($id),
            'parent_categories' => Category::where('parent_id', 0)->get(),
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'parent_id' => 'required',
        ]);

        Category::findOrFail($id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'parent_id' => $request->parent_id
        ]);

        return redirect()->route('admin.category.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Kategori güncellendi.',
            'type' => 'success'
        ]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (count($category->childs)){
            return back()->with([
                'title' => 'Hata!',
                'message' => 'Silmeye çalıştığınız kategorinin alt kategorileri mevcut, öncelikle onları silmelisiniz.',
                'type' => 'error'
            ]);
        }else{
            $category->delete();
            return back()->with([
                'title' => 'Tebrikler!',
                'message' => 'Kategori silindi.',
                'type' => 'success'
            ]);
        }
    }
}
