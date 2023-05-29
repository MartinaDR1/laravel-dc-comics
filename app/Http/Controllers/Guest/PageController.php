<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view('home',compact('banner','footer'));
    }
    public function comics()
    {
        $comics = config('db');
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view('comics', compact('comics','banner','footer'));
    }

}