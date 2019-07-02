@extends('layouts/floki-template')

@section('title', 'Shop - FLOKI Deco & Design')


@section('content')

<div class="contenedor-shop">
    <div class="menu-shop">
        <ul class="sticky-menu-shop">
            <p>Categorias</p>
            <ul>
                @foreach ($categories as $category)
                  @if ($category->is_main)
                    <li>
                        <a href="/shop/{{ $category->url }}">{{ $category->name }}</a>
                    </li>
                  @endif
                @endforeach
            </ul>

            <p>Ordenar por precio</p>
            <ul>
                <li>
                    <a href="/shop/order/asc">Menor a mayor</a>
                </li>
                <li>
                    <a href="/shop/order/desc">Mayor a menor</a>
                </li>
                <li>
                    <a href="/shop/order/5000">Hasta $5.000</a>
                </li>
            </ul>

        </ul>

    </div>

    <div class="contenedor-productos">
        <section class="section-productos">
            @foreach ($products as $product)

              <article class="producto">
                      <div id="photo-shop" >
                              <img class="" src="/uploads/product_photos/{{$product->productPhotos->first()->filename}}"
                                          alt="">
                      </div>
                  <h2>{{ $product->name }}</h2>

                  <h3>${{ $product->price }}</h3>
{{-- @foreach ($product->categories as $category)
    <p>{{ $category->name }}</p>
@endforeach --}}

                  <a href="/product/{{ $product->id }}">Ver más!</a>

                  <form class="" action="/addtocart" method="post">
                    @csrf


                   <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="cantidad" value=1>
                   <input type="hidden" name="name" value="{{ $product->name }}">
                   <input type="hidden" name="price" value="{{ $product->price }}">
                   <input type="hidden" name="photo" value="{{$product->productPhotos->first()->filename }}">

                   <button type="submit" name="button">COMPRAR</button>
                  </form>
              </article>
              @endforeach
          </section>

          <div class="pagination-productos">
              {{$products->appends($_GET)->links()}}
          </div>

    </div>



</div>
</section>
@endsection
