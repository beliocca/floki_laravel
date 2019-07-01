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

    public function search()
    {

      $products = Product::where("name", "LIKE", "%".$_GET["search"]."%")
      ->orwhere("description", "LIKE", "%".$_GET["search"]."%")
      ->paginate(20);

      $categories = Category::all();

      return view('shop')->with('products', $products)
          ->with('categories', $categories);
    }

    public function orderByPrice($parametro)
    {
        if ($parametro == 'asc') {
          $products = Product::orderBy('price')->paginate(20);
        } elseif ($parametro == 'desc') {
          $products = Product::orderBy('price', 'DESC')->paginate(20);
        } elseif (is_numeric($parametro)) {
          $products = Product::where('price', '<', $parametro)->orderBy('price', 'DESC')->paginate(20);
        } else {$products = Product::paginate(20);}

        $categories = Category::all();

        return view('shop')->with('products', $products)
            ->with('categories', $categories);
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
    public function show($id)
    {
        $product = Product::find($id);
        $category = $product->categories->first()->url;
        $productsRecomendados = Product::whereHas('categories', function ($query) use ($category){
            $query->where('url', $category);
        })->inRandomOrder()->take(4)->get();

        return view('product')->with('product', $product)
                              ->with('productsRecomendados', $productsRecomendados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function list(Product $product)
    {
        $products = Product::paginate(20);

        $categories = Category::all();


        return view('productlist')->with('products', $products)
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $data)
    {
       $product = Product::find($data->id);
       return view('editproduct')->with('product', $product);
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

    public function categories($url){


        $products = Product::whereHas('categories', function ($query) use ($url){
            $query->where('url', $url);
        })->paginate(20);



        return view('shop')->with('products', $products);

    }




}
