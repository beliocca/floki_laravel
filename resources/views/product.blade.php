@extends('layouts/floki-template')

@section('title', 'Shop - FLOKI Deco & Design')


@section('content')


<div class="contenedor-producto">

        <div class="fotos-producto">

             <div class="photo-product-main" >
               <i class="fas fa-chevron-left"></i>
                     <img class="" src="/uploads/product_photos/{{$product->productPhotos->first()->filename}}"
                                 alt="">
              <i class="fas fa-chevron-right"></i>
             </div>

        </div>

         <div class="datos-producto">
             <h1>{{ $product->name }}</h1>

             <h2>${{ $product->price }}</h2>

             <h3>Detalles del producto</h3>
             <p>{{ $product->description }}</p>

             <p>STOCK: {{ $product->stock }} unidades.</p>

             <form class="form-producto" action="/addtocart" method="post">
               @csrf

               <div class="cantidad">
                 <h3>Cantidad: </h3>
                 <select name="cantidad">
                   @if ($product->stock > 10)
                     <option value="1" selected>1</option>
                     @for ($i=2; $i < 11; $i++)
                       <option value="{{$i}}">{{$i}}</option>
                     @endfor

                  @elseif ($product->stock > 0 && $product->stock <= 10) {
                    <option value="1" selected>1</option>
                     @for ($i=2; $i < $product->stock ; $i++)
                       <option value="{{$i}}">{{$i}}</option>
                     @endfor
                   }

                 @else{
                   <option value="0" selected>Sin stock</option>
                 }
                   @endif



                 </select>

               </div>

              <input type="hidden" name="id" value="{{ $product->id }}">
              <input type="hidden" name="name" value="{{ $product->name }}">
              <input type="hidden" name="price" value="{{ $product->price }}">
              <input type="hidden" name="photo" value="{{$product->productPhotos->first()->filename }}">

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