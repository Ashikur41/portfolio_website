<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function AboutPage()
    {
        return view('frontend.pages.about');
    }
    public function servicePage()
    {
        return view('frontend.pages.service');
    }
    public function portfolioPage()
    {
        return view('frontend.pages.portfolio');
    }
    public function portfolioDetailsPage()
    {
        return view('frontend.pages.portfolio_details');
    }
    public function blogNewsPage()
    {
        return view('frontend.pages.blog_news');
    }
    public function blogNewsDetails()
    {
        return view('frontend.pages.blog_news_details');
    }
    public function contactPage()
    {
        return view('frontend.pages.contact');
    }
}
