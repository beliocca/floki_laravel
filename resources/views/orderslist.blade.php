@extends('layouts/floki-template')

@section('title', 'Admin - FLOKI Deco & Design')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>
@endsection

@section('content')

<h1 class="titleperfil">Listado Ordenes</h1>

<table class="table table-hover table-responsive-sm">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Items</th>
            <th scope="col">Detalle Productos</th>
            <th scope="col">Total</th>

        </tr>
    </thead>
    <tbody class="thead-light">
        @foreach ($orders as $order)

        <tr>
            <th scope="row"><a href="/admin/orderdetail">{{$order->id}}</a></th>
            @if(isset($order->user_id))
            <td>{{$order->user->email}}</td>
            @else
            <td>{{$order->email}}</td>
            @endif
            <td>{{$order->items}}</td>
            <td>
                <ul>
                    @foreach ($order->orderDetail as $detail)
                    @foreach ($order->products as $product)
                    @if($detail->product_id == $product->id)
                    <li>{{$detail->amount}} {{$product->name}} : ${{$detail->amount*$detail->price}}</li>
                    @endif
                    @endforeach
                    @endforeach
                </ul>
            </td>
            <td>{{$order->amount}}</td>

        </tr>
        @endforeach
    </tbody>
</table>



@endsection
