@extends('layouts/floki-template')

@section('title', 'Checkout - FLOKI Deco & Design')

@section('content')


<div class="container">
    <h2>Gracias por su compra!</h2>
    <p>Su orden ha sido recibida</p>
    <p>Aqui estan los datos de su orden:</p>
    <ul>
        <li>Número de orden: {{$order->id}}</li>
        <li>Productos:
            <ul>
                @foreach ($order->products as $product)
                @foreach($order->orderDetail as $detail)
                @if($detail->product_id == $product->id)
                    <li>{{$detail->amount}} {{$product->name}} : ${{$detail->amount*$product->price}}</li>
                    @endif
                @endforeach
                @endforeach
                <p>Total:${{$order->amount}}</p>
            </ul>
        </li>
    </ul>
    <p>Si lo desea puede contactarnos haciendo click <a href="/contacto">aqui</a> </p>

</div>
@endsection
