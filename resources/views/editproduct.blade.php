@extends('layouts/floki-template')

@section('title', 'Admin - FLOKI Deco & Design')

@section('content')

<h2 class="titleperfil">Editar Productos</h2>
<form class="form-group form-edit" action="/admin/updateproduct" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label class=""for="name">Nombre</label>
        <input class="form-control  " type="text" name="name" value="{{ old('name') }}" placeholder="{{$product->name}}">
    </div>
    <div>
        <label class="" for="price">Precio</label>
        <input class="form-control " type="number" name="price" value="{{ old('price') }}"
            placeholder="{{$product->price}}">
    </div>
    <div>
        <label class="" for="category">Categoria</label>
        <select class="form-control select " type="select" name="category" value="{{ old('category') }}"
            placeholder="{{$product->category}}">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="" for="stock">Unidades</label>
        <input class="form-control " type="number" name="stock" value="{{ old('stock') }}"
            placeholder="{{$product->stock}}">
    </div>
    <div>
        <label class="" for="description">Descripcion</label>
        <input class="form-control " type="textarea" name="description" value="{{ old('description') }}"
            placeholder="{{$product->description}}">
    </div>
    <div>
        <label class="" for="filename">Subir imagenes</label>
        <input class="form-control " type="file" name="filename" value="{{ old('filename') }}">
    </div>
    <div>
        <p>Imagenes cargadas</p>
        @foreach ($product->productPhotos as $photo)
        <form action="/productPhoto/{id}" method="post">
            @csrf
            <img class="img-grid-admin" src="/uploads/product_photos/{{$photo->filename}}" alt="">
            <input type="hidden" type="text" value={{$photo->id}}>
            <button class="btn btn-default" type="submit">Borrar</button>
        </form>
        @endforeach
    </div>
    <button type="submit">EDITAR</button>
</form>
@endsection
