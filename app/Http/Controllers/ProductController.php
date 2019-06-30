<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductPhoto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $products = Product::all();

        $products = Product::paginate(20);

        $categories = Category::all();


        return view('shop')->with('products', $products)
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $data)
    {

        $product = Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'description' => $data['description']
        ]);
        $product->categories()->attach($data->category);
        $route = $data['filename']->store('public/uploads/product_photos');
        $filename = basename($route);
        ProductPhoto::create([
            'filename' => $filename,
            'product_id' => $product->id
        ]);

        // $products = Product::all();
        // return view('/productList')->with('products', $product);
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $product = Product::find($id);
        dd($product);
        return view('product')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function categories($id){
        $categories = Category::all();

        $products = Product::whereHas('categories', function ($q) use ($id){
            $q->where('category_id', $id);
        })->paginate(20);

        dd($categories, $products);

        return view('shop')->with('products', $products)->with('categories', $categories);

    }




}
