<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view('home', compact('banner','footer'));
    }
    public function comics()
    {    
        $comics = Comic::all();
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view('comics', compact('comics','banner','footer'));
    }

    public function comic(Comic $comic)
    {
        return view('comic', compact('comic'));
    }
}