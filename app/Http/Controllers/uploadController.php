<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class uploadController extends Controller
{
    public function index()
    {
        return view('yields.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $dirPath = 'images/';
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move($dirPath, $imageName);

        $fullPath = $dirPath . "" . $imageName;
        
        Image::make($fullPath)->resize($request->width, $request->height)->save(public_path('images/thumbnails'). $imageName);

        return back();;
    }
}
