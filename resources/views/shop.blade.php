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
                  <a href="/product/{{ $product->id }}">Ver más!</a>

                  <form class="" action="index.html" method="post">

                      <input type="hidden" name="id-producto" value="{{ $product->id }}">
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
