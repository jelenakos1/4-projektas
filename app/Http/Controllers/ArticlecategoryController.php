<?php

namespace App\Http\Controllers;

use App\Models\Articlecategory;
use App\Http\Requests\StoreArticlecategoryRequest;
use App\Http\Requests\UpdateArticlecategoryRequest;
use Illuminate\Http\Request;
class ArticlecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articlecategories = Articlecategory::all();
        return view('articlecategories.index', ['articlecategories' => $articlecategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articlecategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticlecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articlecategory = new Articlecategory;
  
        $articlecategory->title = $request->articlecategory_title;
        $articlecategory->description =  $request->articlecategory_description;
       

        $articlecategory->save();

        return redirect()->route('articlecategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articlecategory  $articlecategory
     * @return \Illuminate\Http\Response
     */
    public function show(Articlecategory $articlecategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articlecategory  $articlecategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Articlecategory $articlecategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticlecategoryRequest  $request
     * @param  \App\Models\Articlecategory  $articlecategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticlecategoryRequest $request, Articlecategory $articlecategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articlecategory  $articlecategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articlecategory $articlecategory)
    {
        //
    }
}
