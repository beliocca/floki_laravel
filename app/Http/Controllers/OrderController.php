<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Address;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;
use App\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {
        $orders = Order::all();

        return view('orderslist')->with('orders', $orders);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if(isset($request["user_id"])){
            $user_id = $request["user_id"];
        }else{
            $user_id = null;
        }

        $address = Address::create([
            "user_id" => $user_id,
            "address_line1" => $request["address_line1"],
            "address_line2" => $request["address_line2"],
            "city" => $request["city"],
            "state" => $request["state"],
            "country" => $request["country"],
            "zipcode" => $request["zipcode"]
        ]);


        $json = $request["carts"];
        $carts = json_decode($json, true);

        $items = 0;
        $amount = 0;
        foreach($carts as $cart){
            $items += $cart["quantity"];
            $amount += $cart["product"]["price"];
        }


        $order = Order::create([
            "name" => $request["name"],
            "last_name" => $request["last_name"],
            "email" => $request["email"],
            "user_id" => $user_id,
            "items" => $items,
            "amount" => $amount,
            "order_status_id" => 1,
            "address_id" => $address->id,
        ]);

        foreach($carts as $cart){
            $orderDetail = OrderDetail::create([
                "order_id" => $order->id,
                "product_id" => $cart["product_id"],
                "amount" => $cart["quantity"],
                "price" => $cart["product"]["price"],
                ]);
        }

        if(Auth::user()){
            $carts = Cart::where('user_id', $user_id)->get();
            foreach($carts as $cart){
                $cart->delete();
            }
        };

        return view('success')->with("order", $order);
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
