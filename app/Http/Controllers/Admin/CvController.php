<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Cv;

class CvController extends Controller
{
   public function index()
    {
        $cvs = Cv::all();
        return view('admin.cv.index',compact('cvs'));
    }

    public function create()
    {
        return view('admin.cv.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'mobile' => 'required',
          'email' => 'required',
          'department' => 'required',
          'cv' => 'required',
        ]);

        $cv = $request->file('cv');
        
        $slug = str_slug($request->name);
        if (isset($cv)){
            $cvname = $slug.'-'.uniqid().'.'.$cv->getClientOriginalExtension();
            $cv->move('file/cv',$cvname);
        }

        $cv = new Cv();
        $cv->name = $request->name;
        $cv->mobile = $request->mobile;
        $cv->email = $request->email;
        $cv->department = $request->department;
        $cv->cv = $cvname;
        $cv->status = 1;


        try{
            $cv->save();
            Session::flash('success', 'Cv Insert Successful!');
            return redirect()->route('admin.cv.create');
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
        $gallery_image = Cv::find($id);
        return view('admin.gallery_image.edit', compact('gallery_image'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          // 'category' => 'required',
          'gallery_image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $image = $request->file('gallery_image');
        $gallery_image = Cv::find($id);
        
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
      $gallery_image = Cv::find($id);
      if (file_exists('images/gallery_image/'.$gallery_image->gallery_image)){
        unlink('images/gallery_image/'.$gallery_image->gallery_image);
      }
      $gallery_image->delete();
      Session::flash('success', 'Gallery Image Delete Successful!');
      return back();
    }
}
