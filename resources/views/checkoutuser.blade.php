@extends('layouts/floki-template')

@section('title', 'Checkout - FLOKI Deco & Design')

@section('content')

<h1 class="titleperfil">Checkout</h1>

<div class="container-checkout"></div>

<div class="order-list">
    <h2>Productos</h2>
    <ul>
        @foreach ($carts as $cart)
        <li><span>{{$cart->quantity}} {{$cart->product->name}}
            </span><span>${{$cart->product->price*$cart->quantity}}</span></li>
        @endforeach
        <div>Total: $ {{$total}}</div>
    </ul>
</div>

<div class="order-form">
    <form action="/order" method="POST">
        @csrf
        <input type="hidden" value="{{$carts}}" name="carts">
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <input type="hidden" name="email" value="{{$user->email}}">
        <h2>Tus datos</h2>
        <div>
            <label for="name">Nombre</label>
            <input class="form-control " type="text" value="{{$user->name}}" name="name" placeholder="{{$user->name}}">
        </div>
        <div>
            <label for="last_name">Apellido</label>
            <input class="form-control " type="text" value="{{$user->last_name}}" name="last_name"
                placeholder="{{$user->last_name}}">
        </div>
        <div>
            <label for="address_line1">Direccion </label>
            <input class="form-control " type="text" name="address_line1" @if($user->addresses->first())
            value="{{$user->addresses->first()->address_line1}}" @endif >

            <input class="form-control " type="text" name="address_line2" @if($user->addresses->first())
            value="{{$user->addresses->first()->address_line2}}" @endif>
        </div>
        <div>
            <label for="city">Ciudad</label>
            <input class="form-control " type="text" name="city" @if($user->addresses->first())
            value="{{$user->addresses->first()->city}}" @endif>

        </div>
        <div>
            <label for="zipcode">Código postal</label>
            <input class="form-control " type="text" name="zipcode" @if($user->addresses->first())
            value="{{$user->addresses->first()->zipcode}}" @endif>

        </div>
        <div>
            <label for="state">Provincia</label>
            <input class="form-control " type="text" name="state" @if($user->addresses->first())
            value="{{$user->addresses->first()->state}}" @endif>
        </div>
        <div>
            <label for="contry">Pais</label>
            <input class="form-control " type="text" name="country" @if($user->addresses->first())
            value="{{$user->addresses->first()->country}}" @endif>
        </div>

        <div>
            <label>Pagá con:</label>
            <div class="payment">
            <div ><a href="https://www.mercadopago.com.ar/" ><img src="/images/payment/mercadopago.jpg" alt=""></a>
            </div>
            <div ><a href="https://www.paypal.com"><img src="/images/payment/paypal.jpg" alt=""></a>
            </div>
            </div>
        </div>
        <button class="button" type="submit">Comprar</button>

    </form>


    @endsection
