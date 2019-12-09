<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\GalleryImage;

class GalleryImageController extends Controller
{
   public function index()
    {
        $gallery_images = GalleryImage::orderBy('id', 'desc')->get();
        return view('admin.gallery_image.index',compact('gallery_images'));
    }

    public function create()
    {
        return view('admin.gallery_image.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
          'category' => 'required',
          'gallery_image' => 'required|mimes:jpeg,jpg,png,webp',
        ]);

        $image = $request->file('gallery_image');
        

        $slug = str_slug($request->category);
        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/gallery_image',$imagename);
        }

        $gallery_image = new GalleryImage();
        $gallery_image->category = $request->category;
        $gallery_image->gallery_image = $imagename;
        $gallery_image->status = 1;


        try{
            $gallery_image->save();
            Session::flash('success', 'Gallery Image Add Successful!');
            return redirect()->route('admin.gallery_image.create');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $gallery_image = GalleryImage::find($id);
        return view('admin.gallery_image.edit', compact('gallery_image'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          // 'category' => 'required',
          'gallery_image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $image = $request->file('gallery_image');
        $gallery_image = GalleryImage::find($id);
        
        $slug = str_slug($request->category);
        if (isset($image)){
            if (file_exists('images/gallery_image/'.$gallery_image->gallery_image)){
                unlink('images/gallery_image/'.$gallery_image->gallery_image);
            }
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/gallery_image',$imagename);
            $gallery_image->gallery_image = $imagename;

        }
        $gallery_image->category = $request->category;
        $gallery_image->status = 1;


        try{
            $gallery_image->save();

            Session::flash('success', 'Gallery Image Add Successful!');
            return redirect()->route('admin.gallery-image.index');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }


    }

    public function destroy($id)
    {
      $gallery_image = GalleryImage::find($id);
      if (file_exists('images/gallery_image/'.$gallery_image->gallery_image)){
        unlink('images/gallery_image/'.$gallery_image->gallery_image);
      }
      $gallery_image->delete();
      Session::flash('success', 'Gallery Image Delete Successful!');
      return back();
    }
}
