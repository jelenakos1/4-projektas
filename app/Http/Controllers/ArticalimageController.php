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

          $imageName = 'image' . time().'.'.$request->image_src->extension();
          $request->image_src->move(public_path('images') , $imageName);
          $articalimage->src = $imageName;

          $articalimage->width = $request->image_width;
          $articalimage->height =  $request->image_height;
          $articalimage->class =  $request->image_class;
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
        return view('articalimages.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function edit(Articalimage $articalimage)
    {
        return view('articalimages.edit', ['articaleimage'=>$articalimage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticalimageRequest  $request
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articalimage $articalimage)
    {
        if($request->has('image_src')) {
            $imageName = 'image' . time().'.'.$request->image_src->extension();
            $request->image_src->move(public_path('images') , $imageName);
            $articalimage->src = $imageName;
        }

        $articalimage->alt = $request->image_alt;
        $articalimage->width = $request->image_width;
        $articalimage->height = $request->image_height;
        $articalimage->class = $request->image_class;



        $articalimage->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articalimage  $articalimage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articalimage $articalimage)
    {
        return view('articalimages.destroy');
    }
}
