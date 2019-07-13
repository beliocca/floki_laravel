@extends('layouts/floki-template')

@section('title', 'Mis Ordenes - FLOKI Deco & Design')


@section('content')



<div class="container perfil">
    <div class="row">
        <div class="col-12 col-sm-4 ">
            <h2 class="h2perfil">cuenta</h2>
            <ul>
                <li>
                    <a class="listperfil" href="/profile">perfil</a>
                </li>
                <li>
                    <a class="listperfil" href="/profile/orders/{{$user->id}}">historial de ordenes</a>
                </li>
                <li>
                    <a class="listperfil" href="/profile/addresses/{{$user->id}}">direcciones guardadas</a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-sm-8  userorders">
            <h2 class="h2perfil">Ordenes</h2>
            @foreach($orders as $order)
            <div class="ordercontainer">
                <div class="ordercol col1">
                <div>Numero de Order: {{$order->id}} </div>
                <div>Nombre: {{$order->name}} {{$order->last_name}}</div>
                <div>
                <a href=""> @if(isset($order->shipping))
                        {{$order->shipping->tracking_number}}{{$order->shipping->courier_company}}
                        @endif </a></div>
                </div>
                <div class="ordercol col2">Direccion:
                    <div>{{$order->address->address_line1}} {{$order->address->address_line2}}</div>
                    <div>{{$order->address->city}} CP:{{$order->address->zipcode}}</div>
                    <div>{{$order->address->state}} {{$order->address->country}}</div>
                    </div>
                <div class="ordercol col3">
                    <ul><div>Productos:</div>
                        @foreach ($order->products as $product)
                        @foreach ($order->orderDetails as $detail)
                            @if($detail->product_id == $product->id)
                           <li>{{$detail->amount}} {{$product->name}} {{$detail->price}} = ${{$detail->amount*$detail->price}}</li>
                            @endif
                        @endforeach
                        @endforeach
                    </ul>
                </div>



            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection
