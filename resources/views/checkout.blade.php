@extends('layouts/floki-template')

@section('title', 'Checkout - FLOKI Deco & Design')

@section('content')

<h1 class="titleperfil">Checkout</h1>
<div>
    <h2>Productos</h2>
    <ul>
        @foreach ($carts as $cart)

        <li><span>{{$cart->quantity}} {{$cart->product->name}}
            </span><span>${{$cart->product->price*$cart->quantity}}</span></li>
        @endforeach
    </ul>
</div>



<form action="/order" method="POST">
    @csrf


    <input type="hidden" value="{{$carts}}" name="carts">
    <h2>Tus datos</h2>
    <label for="name">Nombre</label>
    <input class="form-control " type="text" value="{{$user->name}}" name="name" placeholder="{{$user->name}}">
    <label for="last_name">Apellido</label>
    <input class="form-control " type="text" value="{{$user->last_name}}" name="last_name" placeholder="{{$user->last_name}}">

    @if(Auth::user())
    <input type="hidden" name="user_id" value="{{$user->id}}">
    <input type="hidden" name="email" value="{{$user->email}}">
    @else
    <label for="email">email</label>
    <input class="form-control " type="email" value="" name="email">
    @endif
    <label for="address_line1">Direccion </label>
    <input class="form-control " type="text" value="" name="address_line1" @if($user->addresses->first()) placeholder="{{$user->addresses->first()->address_line1}}" @endisset >
    <input class="form-control " type="text" value="" name="address_line2" @if($user->addresses->first()) placeholder="{{$user->addresses->first()->address_line2}}" @endif>
    <label for="city">Ciudad</label>
    <input class="form-control " type="text" value="" name="city"  @if($user->addresses->first()) placeholder="{{$user->addresses->first()->city}}" @endif>
    <label for="zipcode">Código postal</label>
    <input class="form-control " type="text" value="" name="zipcode"  @if($user->addresses->first()) placeholder="{{$user->addresses->first()->zipcode}}" @endif>
    <label for="state">Provincia</label>
    <input class="form-control " type="text" value="" name="state"  @if($user->addresses->first()) placeholder="{{$user->addresses->first()->state}}" @endif>
    <label for="contry">Pais</label>
    <input class="form-control " type="text" value="" name="country"  @if($user->addresses->first()) placeholder="{{$user->addresses->first()->country}}" @endif>

    <button type="submit">Comprar</button>

</form>

@endsection
