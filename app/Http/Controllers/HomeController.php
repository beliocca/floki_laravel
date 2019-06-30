<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductPhoto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function index()
    {

        $topProducts = Product::orderBy('units_sold')->take(4)->get();
        $idTopProductos =[] ;
        foreach ($topProducts as $topProduct) {
          $idTopProductos[] = $topProduct->id;
        }

        return view('home')->with('topProducts', $topProducts);

    }
}
