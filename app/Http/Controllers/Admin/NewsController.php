<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'image' => 'required|mimes:jpeg,jpg,png,webp',
        ]);


        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/news',$imagename);
        }

        $news = new News();
        $news->title = $request->title;
        $news->image = $imagename;
        $news->details = $request->details;
        $news->status = 1;

        try{
            $news->save();
            Session::flash('success', 'News Add Successful!');
            return redirect()->route('admin.news.index');
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
        $news = News::find($id);
        return view('admin.pages.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
          'title' => 'required'
        ]);

        $news = News::find($id);

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)){
            if (file_exists('images/news/'.$news->image)){
                unlink('images/news/'.$news->image);
            }
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/news',$imagename);
            $news->image = $imagename;
        }

        $news->title = $request->title;
        $news->details = $request->details;
        $news->status = 1;

        try{
            $news->save();
            Session::flash('success', 'News update Successful!');
            return redirect()->route('admin.news.index');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }

    }

    public function destroy($id)
    {
      $news = News::find($id);
      if (file_exists('images/news/'.$news->image)){
        unlink('images/news/'.$news->image);
      }
      $news->delete();
      return back();
    }
}
