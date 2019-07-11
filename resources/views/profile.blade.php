@extends('layouts/floki-template')

@section('title', 'Mi Perfil - FLOKI Deco & Design')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/perfil.css') }}"/>
@endsection


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
            <form action="/profile" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                <div>
                    <label for="name">Nombre</label>
                <input id="name" class="userform form-control" type="text" name="name" value="{{$user->name}}" autofocus
                        @error('name') @if (isset($message)) placeholder="{{ $message }}" @endif> @enderror>
                </div>
                <div>
                    <label for="last_name">Apellido</label>
                <input id="last_name" class="userform form-control" type="text" name="last_name" value="{{$user->last_name}}" autofocus
                        @error('last_name') @if (isset($message)) placeholder="{{ $message }}" @enderror @endif>
                </div>

                <div>
                    <label for="phone">Telefono</label>
                <input id="phone" class="userform form-control" type="number" name="phone" value="{{$user->phone}}"  autofocus>
                    @error('phone')
                    <small class="tyc">{{$message }}</small>
                    @enderror

                </div>
                <div>
                    <label for="birthday">Cumpleaños</label>
                    <input id="birthday" class="userform form-control" type="date" name="birthday"
                        value="{{$user->birthday}}" autofocus>
                    @error('birthday')
                    @if (isset($message))
                    <small class="tyc">{{$message }}</small>
                    @enderror
                    @endif
                </div>

                <button type="submit">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
