<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.portfolio.index', [
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.portfolio.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'image' => 'mimes:jpg,jpeg,png|required'
        ]);

        $extension = $request->image->getClientOriginalExtension();
        $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;

        Image::make($request->image)
            ->resize(1020, 519)
            ->save('uploads/img/portfolio/' . $filename);

        Portfolio::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'desc' => $request->desc,
            'category_id' => $request->category_id,
            'image' => 'uploads/img/portfolio/' . $filename
        ]);

        return redirect()->route('admin.portfolio.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Yeni portfolyo eklendi.',
            'type' => 'success'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('backend.pages.portfolio.edit', [
            'portfolio' => $portfolio,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $portfolio = Portfolio::find($id);

        if ($request->image){
            File::delete(public_path($portfolio->image));
            $request->validate([
                'image' => 'mimes:jpg,jpeg,png',
            ]);

            $extension = $request->image->getClientOriginalExtension();
            $filename = date('YmdHis-') . hexdec(uniqid()) . "." . $extension;
            Image::make($request->image)
                ->resize(1020, 519)
                ->save('uploads/img/portfolio/' . $filename);

            $portfolio->update([
                'image' => 'uploads/img/portfolio/' . $filename
            ]);
        }

        Portfolio::find($id)->update([
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'desc' => $request->desc,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.portfolio.index')->with([
            'title' => 'Tebrikler!',
            'message' => 'Portfolyo güncellendi.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        File::delete(public_path(Portfolio::find($id)->image));
        Portfolio::find($id)->delete();
        return back()->with([
            'title' => 'Tebrikler!',
            'message' => 'Portfolyo silindi.',
            'type' => 'success'
        ]);
    }
}
