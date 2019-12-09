<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\GalleryImage;

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
}
