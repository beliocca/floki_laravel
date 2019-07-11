@extends('layouts/floki-template')

@section('title', 'Checkout - FLOKI Deco & Design')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}"/>
@endsection

@section('content')

<h1 class="titleperfil">Checkout</h1>

<div class="container-checkout"></div>

<div class="order-list">
    <h2>Productos</h2>
    <ul>
        @foreach ($carts as $cart)
        <li><span>{{$cart["cantidad"]}} {{$cart["name"]}}
            </span><span>${{$cart["price"]*$cart["cantidad"]}}</span></li>
        @endforeach
        <div>Total: $ {{$total}}</div>
    </ul>
</div>

<div class="order-form">
    <form action="/order" method="POST">
        @csrf
        <h2>Tus datos</h2>
        <div>
            <label for="name">Nombre</label>
            <input class="form-control " type="text" name="name">
        </div>
        <div>
            <label for="last_name">Apellido</label>
            <input class="form-control " type="text" name="last_name">
        </div>
        <div>
            <label for="email">email</label>
            <input class="form-control " type="email" value="" name="email">
        </div>
        <div>
            <label for="address_line1">Direccion</label>
            <input class="form-control " type="text" value="" name="address_line1">

            <input class="form-control" id="addressline2" type="text" value="" name="address_line2">
        </div>
        <div>
            <label for="city">Ciudad</label>
            <input class="form-control " type="text" value="" name="city">
        </div>
        <div>
            <label for="zipcode">Código postal</label>
            <input class="form-control " type="text" value="" name="zipcode">
        </div>
        <div>
            <label for="state">Provincia</label>
            <input class="form-control " type="text" value="" name="state">
        </div>
        <div>
            <label for="contry">Pais</label>
            <input class="form-control " type="text" value="" name="country">
        </div>


        <button class="button"  type="submit">Comprar</button>

    </form>
</div>
</div>

@endsection
