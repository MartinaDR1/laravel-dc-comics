<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $comics = Comic::orderByDesc('id')->get();
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view ('admin.comics.index', compact('comics','banner','footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view('admin.comics.create', compact('banner','footer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic = new Comic();

        $comic->title = $request->title;
        $comic->description= $request->description;
        $comic->thumb= $request->thumb;
        $comic->price= $request->price;
        $comic->series= $request->series;
        $comic->sale_date= $request->sale_date;
        $comic->type= $request->type;
        $comic->save();

        return to_route('comics.index')->with('message', 'Comic created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {   
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view('admin.comics.show', compact('comic','banner','footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $banner = config('app_banner_links');
        $footer = config('app_footer_links');
        return view ('admin.comics.edit', compact('comic','banner','footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data=[
            'title' => $request-> title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type,
        ];

        $comic -> update($data);
    
        return to_route('comics.index')->with('message', 'Comic update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', 'Comic delete successfully');
    }
}
