@extends('layouts/floki-template')

@section('title', 'Shop - FLOKI Deco & Design')


@section('content')


<div class="contenedor-producto">

        <div class="fotos-producto">

             <div id="photo-product-main" >
                     <img class="" src="/uploads/product_photos/{{$product->productPhotos->first()->filename}}"
                                 alt="">
             </div>

        </div>

         <div class="datos-producto">
             <h1>{{ $product->name }}</h1>

             <h2>${{ $product->price }}</h2>

             <h3>Detalles del producto</h3>
             <p>{{ $product->description }}</p>

             <p>STOCK: {{ $product->stock }} unidades.</p>

             <form class="form-producto" action="index.html" method="post">

               <input type="text" name="cantidad" value="" placeholder="Cantidad">

              <input type="hidden" name="id-producto" value="{{ $product->id }}">
              <button type="submit" name="button">COMPRAR</button>
             </form>

             {{-- @foreach ($product->categories as $category)
                 <p>{{ $category->name }}</p>
             @endforeach --}}

         </div>

</div>

<div class="producto-recomendaciones">
  <div class="te-puede-gustar">
    <hr>
    <h1>También te puede gustar</h1>
    <hr>
  </div>
  <section class="productos-recomendados">
    @foreach ($productsRecomendados as $product)

      <article class="producto-recomendado">
        <div class="producto-recomendado-photo">
        <img src="{{ asset('uploads/product_photos/' . $product->productPhotos->first()->filename) }}" alt="">
        </div>
        <h2>{{ $product->name }}</h2>
        <h3>${{ $product->price }}</h3>

        <a href="/product/{{ $product->id }}">Ver más</a>
        {{-- @foreach ($product->categories as $category)
            <p>{{ $category->name }}</p>
        @endforeach --}}
      </article>
    @endforeach
  </section>

</div>


@endsection
