@extends('layouts/floki-template')

@section('title', 'Checkout - FLOKI Deco & Design')

@section('content')

<h1 class="titleperfil">Carrito</h1>

@if(isset($currentUser))

@php
$carts = \App\Cart::where('user_id', $currentUser->id)->get();
$precioTotal = 0;
$cantidadProductos = 0;

foreach($carts as $cart){
$cantidadProductos += $cart->quantity;
$precioTotal += $cart->product->price * $cart->quantity;
}
@endphp

<table class="table table-hover table-responsive-sm">
    <thead class="thead-light">
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">precio</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="thead-light">
        @foreach ($carts as $cart)
        <tr class="productorder">
            <input type="hidden" class="currentuser" name="user_id" value={{$cart->user_id}}>
            <input class="input-product-id" type="hidden" value={{$cart->product_id}}>
            <td> <img class="img-grid-admin"
                    src="/uploads/product_photos/{{$cart->product->productPhotos->first()->filename}}" alt=""></td>
            <td>{{$cart->product->name}}</td>
            <td><input class="cantidadproductos" type="number" value="{{$cart->quantity}}"></td>
            <td class="precioporproducto">{{$cart->product->price * $cart->quantity}}</td>
            <td><button class="btn-delete-out"><i class="fas fa-times-circle"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="divcheckout">Total: $ <span class="checkouttotal">{{$precioTotal}}</span>
</div>
<form action="/checkoutuser">
    <input type="hidden" class="currentuser" name="user_id" value={{$cart->user_id}}>
    <div class="buttonssubmit">
    <button type="submit">Comprar</button></a>
</div>
</form>

@elseif(Session::has('cart'))

@php
$cantidadProductos = 0;
$precioTotal = 0;

foreach (Session::get('cart') as $cartId => $product) {
$cantidadProductos += $product['cantidad'];
$precioTotal += $product['price'] * $product['cantidad'];
}
@endphp

<table class="table table-hover table-responsive-sm">

    <thead class="thead-light">
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">precio</th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody class="thead-light">
        @foreach ($products as $product)
        @foreach (Session::get('cart') as $cartId => $item)
        @if ($item['id']==$product->id)
        <tr class="productorder">
                <input type="hidden" class="currentuser" name="user_id" >
            <input class="input-product-id" type="hidden" value={{$product->id}}>
<td> <img class="img-grid-admin" src="/uploads/product_photos/{{$product->productPhotos->first()->filename}}" alt="">
</td>
<td>{{$product->name}}</td>
<td><input class="cantidadproductos" type="number" value="{{$item['cantidad']}}"></td>
<td class="precioporproducto">{{$product->price * $item['cantidad']}}</td>
<td><button class="btn-delete-out"><i class="fas fa-times-circle"></i></button>
</td>
</tr>
@endif
@endforeach
@endforeach
</tbody>

</table>

<div class="divcheckout">Total: $ <span class="checkouttotal">{{$precioTotal}}</span>
</div>

<div class="buttonssubmit">
    <a href="/checkoutguest"><button type="submit">Comprá como invitado</button></a>

     <a href="/checkoutuser">  <button type="submit">Comprá con tu cuenta</button></a>

</div>
@else
<h1>No tiene productos en su carrito</h1>
@endif

@endsection


@section('scripts')
<script src="{{ asset('js/cart.js') }}"></script>
@endsection
