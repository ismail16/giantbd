<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
     public function index()
    {
        return view('website.pages.index');
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
        return view('website.pages.take_a_tour');
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
}
