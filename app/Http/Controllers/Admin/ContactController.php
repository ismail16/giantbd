<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $Contacts = Contact::orderBy('id', 'desc')->get();
        return view('admin.contact.index',compact('Contacts'));
    }

    public function create()
    {
        return view('admin.Contact.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'mobile' => 'required',
          'email' => 'required',
          'department' => 'required',
          'Contact' => 'required',
        ]);

        $Contact = $request->file('Contact');
        
        $slug = str_slug($request->name);
        if (isset($Contact)){
            $Contactname = $slug.'-'.uniqid().'.'.$Contact->getClientOriginalExtension();
            $Contact->move('file/Contact',$Contactname);
        }

        $Contact = new Contact();
        $Contact->name = $request->name;
        $Contact->mobile = $request->mobile;
        $Contact->email = $request->email;
        $Contact->department = $request->department;
        $Contact->Contact = $Contactname;
        $Contact->status = 1;


        try{
            $Contact->save();
            Session::flash('success', 'Contact Insert Successful!');
            return redirect()->route('admin.Contact.create');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }

    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $gallery_image = Contact::find($id);
        return view('admin.gallery_image.edit', compact('gallery_image'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          // 'category' => 'required',
          'gallery_image' => 'mimes:jpeg,jpg,png,webp',
        ]);

        $image = $request->file('gallery_image');
        $gallery_image = Contact::find($id);
        
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
      $gallery_image = Contact::find($id);
      if (file_exists('images/gallery_image/'.$gallery_image->gallery_image)){
        unlink('images/gallery_image/'.$gallery_image->gallery_image);
      }
      $gallery_image->delete();
      Session::flash('success', 'Gallery Image Delete Successful!');
      return back();
    }
}
