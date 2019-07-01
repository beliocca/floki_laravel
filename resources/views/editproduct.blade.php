@extends('layouts/floki-template')

@section('title', 'Admin - FLOKI Deco & Design')

@section('content')

<h2 class="h2perfil">Editar Productos</h2>
<form action="/admin/updateproduct" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="{{$product->name}}">
    </div>
    <div>
        <label for="price">Precio</label>
        <input class="form-control" type="number" name="price" value="{{ old('price') }}"
            placeholder="{{$product->price}}">
    </div>
    <div>
        <label for="category">Categoria</label>
        <select class="form-control" type="select" name="category" value="{{ old('category') }}"
            placeholder="{{$product->category}}">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="stock">Unidades</label>
        <input class="form-control" type="number" name="stock" value="{{ old('stock') }}"
            placeholder="{{$product->stock}}">
    </div>
    <div>
        <label for="description">Descripcion</label>
        <input class="form-control" type="textarea" name="description" value="{{ old('description') }}"
            placeholder="{{$product->description}}">
    </div>

    <div>
        <p>Imagenes</p>
        @foreach ($product->productPhotos as $photo)
        <form action="/productPhoto/{id}" method="post">
            @csrf
            <img class="img-grid-admin" src="/uploads/product_photos/{{$photo->filename}}" alt="">
            <input type="hidden" type="text" value={{$photo->id}}>
            <button class="btn btn-default" type="submit">Borrar</button>
        </form>

        @endforeach
    </div>
    <div>
        <label for="filename">Subir mas imagenes</label>
        <input class="form-control" type="file" name="filename" value="{{ old('filename') }}">
    </div>
    <button type="submit">EDITAR</button>
</form>
@endsection
