@extends('layouts/floki-template')

@section('title', 'Admin - FLOKI Deco & Design')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>


@endsection

@section('content')

  <ul class="menu-admin-horizontal">
      <li>
          <a class="listperfil" href="/admin/productslist">productos</a>
      </li>
      <li>
          <a class="listperfil" href="/admin/categorieslist">categorias</a>
      </li>
      <li>
          <a class="listperfil" href="/admin/orderslist">ordenes</a>
      </li>
      <li>
          <a class="listperfil" href="/admin/userslist">usuarios</a>
      </li>
      <li>
          <a class="listperfil" href="/profile">agregar producto</a>
      </li>
  </ul>

<h1 class="titleperfil">Listado Usuarios</h1>

<table class="table table-hover table-responsive-sm">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
        </tr>
    </thead>
    <tbody class="thead-light">
            @foreach ($users as $user)
        <tr>
        <td><a href="/admin/edituser/{{$user->id}}">{{$user->id}}</a></td>
            <td>{{$user->name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->role}}</td>
        </tr>
        @endforeach
    </tbody>

</table>

<div class="contenedor-productos">
    <div class="pagination-productos">
        {{$users->appends($_GET)->links()}}
    </div>
    </div>

@endsection
