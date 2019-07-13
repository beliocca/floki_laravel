@extends('layouts/floki-template')

@section('title', 'Mis Direcciones - FLOKI Deco & Design')


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
            <h2 class="h2perfil">Direcciones</h2>
            @foreach($addresses as $address)
            <div class="addresscontainer">

                <div class="">Direccion:
                    <div>{{$address->address_line1}} {{$address->address_line2}}</div>
                    <div>{{$address->city}} CP:{{$address->zipcode}}</div>
                    <div>{{$address->state}} {{$address->country}}</div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection
