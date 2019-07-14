@extends('layouts/floki-template')

@section('title', 'Mis Direcciones - FLOKI Deco & Design')

@section('css')
<link rel="stylesheet" href="{{ asset('css/perfil.css') }}" />
@endsection

@section('content')

<div class=" perfil">
    <div class="" data-aos="zoom-in" data-aos-duration="1000">
        <div class="row">
            <div class="col-12 col-sm-4 ">
                <h2 class="h2perfil">cuenta</h2>
                <ul class="menu">
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
            <div class="col-12 col-sm-8  userorders addresses">
                <h2 class="h2perfil2">Direcciones</h2>
                @foreach($addresses as $address)
                <div class="addresscontainer">
                        <div>{{$address->address_line1}} {{$address->address_line2}} {{$address->city}} CP:{{$address->zipcode}} {{$address->state}} {{$address->country}}</div>
                        <a href="/profile/deleteaddress/{{$address->id}}"><button class="deletebtn"><i class="fas fa-times-circle"></i></button></a>

                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>

@endsection
