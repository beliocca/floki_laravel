@extends('layouts/floki-template')

@section('title', 'Admin - FLOKI Deco & Design')

@section('content')

<h1 class="titleperfil">Listado Categorias</h1>

<table class="table table-hover table-responsive-sm">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Url</th>
            <th scope="col">Principal</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="thead-light">
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td><input value={{$category->name}}><a href="/admin/editcategory/{{$category->id}}/{{$category->name}}"><i class="far fa-edit"></i></a>
                {{-- Como hago para mandar el input adentro de la A? o lo hago directamente con js?? HACER CON JS --}}
            </td>
            <td><input value={{$category->url}}><a href="/admin/editcategory/{{$category->id}}"><i class="far fa-edit"></i></a>
            </td>
            <td><a href="/admin/editcategory/{{$category->id}}"><input type="checkbox" value="{{$category->is_main}}===1"
                @if ($category->is_main===1)
                    checked
                @endif></a></td>
            <td>
                <a href="/admin/deletecategory/{{$category->id}}"><button name="button">Eliminar</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection
