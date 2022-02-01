<?php

namespace App\Http\Controllers;

use App\Models\Articalimage;
use App\Http\Requests\StoreArticalimageRequest;
use App\Http\Requests\UpdateArticalimageRequest;
use Illuminate\Http\Request;

class ArticalimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articalimages = Articalimage::all();
        return view('articalimages.index', ['articalimages' => $articalimages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articalimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticalimageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $articalimage = new Articalimage();

          $articalimage->alt = $request->articalimage_alt;
          $articalimage->src =  $request->articalimage_src;
          $articalimage->width = $request->articalimage_width;
          $articalimage->height =  $request->articalimage_height;
          $articalimage->class =  $request->articalimage_class;
          $articalimage->save();
  
          return redirect()->route('articalimage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function show(Articalimage $articalimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Articalimage $articalimage)
    {
        return view('articalimages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticalimageRequest  $request
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticalimageRequest $request, Articalimage $articalimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articalimage $articalimage)
    {
        //
    }
}
