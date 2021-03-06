<?php

namespace App\Http\Controllers;

use App\ProductPhoto;
use Illuminate\Http\Request;
USE App\Product;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\File;

class ProductPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductPhoto  $productPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPhoto $productPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductPhoto  $productPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPhoto $productPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductPhoto  $productPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductPhoto $productPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductPhoto  $productPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $photo = ProductPhoto::find($id);
        $productid= $photo->product_id;
        $path = "uploads/product_photos/" . $photo->filename;
        unlink($path);
        $photo->delete();
        return redirect('/admin/showproduct/'.$productid);
    }
}

