@extends('layouts/floki-template')

@section('title', 'Checkout - FLOKI Deco & Design')

@section('css')
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}" />
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/checkout.js') }}"> </script>
@endsection

@section('content')

<div class="container-checkout">
    <div class="" data-aos="zoom-in" data-aos-duration="1000">

        <div class="checkout-title">
            <h1>Checkout</h1>
        </div>

        <div class="order-list">
            <a href="#" id="navbarDropdown" role="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <h2>Productos</h2>
            </a>
            <div class="collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach ($carts as $cart)
                    <li class="nav-item active">{{$cart["cantidad"]}} {{$cart["name"]}}
                        ${{$cart["price"]*$cart["cantidad"]}} </li>
                    @endforeach
                    <li class="li-cart-total">
                        Total: ${{ $total }}
                    </li>
                </ul>
            </div>
        </div>

        <div class="order-form">
            <form action="/order" method="POST">
                @csrf
                <h2>Tus datos</h2>
                <div>
                    <label for="name">Nombre</label>
                    <input class="form-control " type="text" name="name" required>
                </div>
                <div>
                    <label for="last_name">Apellido</label>
                    <input class="form-control " type="text" name="last_name" required>
                </div>
                <div>
                    <label for="email">email</label>
                    <input class="form-control " type="email" value="" name="email" required>
                </div>
                <div>
                    <label for="address_line1">Direccion</label>
                    <input class="form-control " type="text" value="" name="address_line1" required>

                    <input class="form-control" id="addressline2" type="text" value="" name="address_line2" required>
                </div>
                <div>
                    <label for="city">Ciudad</label>
                    <input class="form-control " type="text" value="" name="city" required>
                </div>
                <div>
                    <label for="zipcode">Código postal</label>
                    <input class="form-control " type="text" value="" name="zipcode" required>
                </div>
                <div>
                    <label for="state">Provincia</label>
                    <input class="form-control " type="text" value="" name="state" required>
                </div>
                <div>
                    <label for="contry">Pais</label>
                    <input class="form-control " type="text" value="" name="country" required  xp>
                </div>
                <div>
                    <label>Pagá con:</label>
                    <div class="payment">
                        <div><a href="https://www.mercadopago.com.ar/"><img src="/images/payment/mercadopago.jpg"
                                    alt=""></a>
                        </div>
                        <div><a href="https://www.paypal.com"><img src="/images/payment/paypal.jpg" alt=""></a>
                        </div>
                    </div>
                </div>

                <button class="orderbutton" type="submit">Comprar</button>

            </form>
        </div>
    </div>

    @endsection