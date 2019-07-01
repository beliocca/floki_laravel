@extends('layouts/floki-template')

@section('title', 'Admin - FLOKI Deco & Design')

@section('content')

<h1 class="">Listado Productos</h1>

<table class="table table-hover table-responsive-lg">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Foto</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td> <img class="img-grid-admin"
                    src="/uploads/product_photos/{{$product->productPhotos->first()->filename}}" alt=""></td>
            <td>
                <form class="" action="/admin/showproduct" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <button type="submit">Editar</button>
                </form>
            </td>
            <td>
                <form class="" action="/admin/deleteproduct" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <button type="submit" name="button">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<div class="pagination-productos">
    {{$products->appends($_GET)->links()}}
</div>

</div>



@endsection
