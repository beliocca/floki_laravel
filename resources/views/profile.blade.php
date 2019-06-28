@extends('layouts/floki-template')

@section('title', 'Mi Perfil - FLOKI Deco & Design')


@section('content')



<div class="container perfil">
        <div class="row">
            <div class="col-12 col-sm-4 ">
                <h2 class="h2perfil">cuenta</h2>
                <ul>
                    <li>
                        <a class="listperfil" href="">perfil</a>
                    </li>
                    <li>
                        <a class="listperfil" href="">historial de ordenes</a>
                    </li>
                    <li>
                        <a class="listperfil" href="">direcciones guardadas</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-8">
                <h2 class="h2perfil">perfil</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Nombre</label>
                        <input class="form-control" type="text" name="name" value="{{$user->name}}">
                    </div>
                    <div>
                        <label for="last_name">Apellido</label>
                        <input class="form-control" type="text" name="last_name" value="{{$user->last_name}}">
                    </div>
                    <div>
                        <label for="phone">Telefono</label>
                        <input class="form-control" type="text" name="phone" value="{{$user->phone}} ">
                    </div>

                    <div>
                        <label for="birthday">Cumpleaños</label>
                     <input class="form-control" type="date" name="birthday" min="1910-01-01" value="{{$user->birthday}}">
                    </div>

                    <button type="submit">Actualizar</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
