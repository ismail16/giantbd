<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\GalleryImage;
use Session;
use App\Models\Cv;
use App\Models\PostJob;
use App\Models\Contact;

class PagesController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('website.pages.index', compact('news'));
    }

    public function profiles()
    {
        return view('website.pages.profiles');
    } 

    public function sustainable_strategy()
    {
        return view('website.pages.sustainable_strategy');
    }

     public function take_a_tour()
    {
        $gallery_images = GalleryImage::orderBy('id', 'desc')->get();
        return view('website.pages.take_a_tour',compact('gallery_images'));
    }

     public function our_concerns()
    {
        return view('website.pages.our_concerns');
    }

     public function giant_future()
    {
        return view('website.pages.giant_future');
    }

     public function join_us()
    {
        return view('website.pages.join_us');
    }

     public function our_pride_bangladesh()
    {
        return view('website.pages.our_pride_bangladesh');
    }

    public function contact()
    {
        return view('website.pages.contact');
    }

    public function login()
    {
        return view('website.pages.login');
    }


    public function news_details()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('website.pages.news_details', compact('news'));
    }

    public function single_news($id)
    {
        $news = News::find($id);
        return view('website.pages.single_news', compact('news'));
    } 

    public function job_announcement()
    {
        $PostJobs = PostJob::orderBy('id','desc')->get();
        return view('website.pages.job_announcement',compact('PostJobs'));
    }

    public function show_jobs($id)
    {
        $PostJob = PostJob::find($id);
        return view('website.pages.show_jobs',compact('PostJob'));
    }

    public function cv_post(Request $request)
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
            return redirect()->route('join_us');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }
    } 

    public function contact_post(Request $request)
    {
        // return $request;
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'message' => 'required'
        ]);
        
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->status = 1;
        try{
            $contact->save();
            Session::flash('success', 'Message sent Successful!');
            return redirect()->route('contact');
        }catch (\Exception $exception){
            return back()->with('danger', 'Something wrong');
        }
    }
}
