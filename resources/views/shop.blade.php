@extends('layouts/floki-template')

@section('title', 'Shop - FLOKI Deco & Design')


@section('content')

  <div class="contenedor-shop">
    <div class="menu-shop">
      <ul class="sticky-menu-shop">
        <p>Categorias</p>
        <ul>
              @foreach ($categories as $category)
                <li>
                  <a href="/shop/{{ $category->name }}">{{ $category->name }}</a>
                </li>
              @endforeach
        </ul>

        <p>Ordenar por precio</p>
        <ul>
          <li>
            <a href="#">Menor a mayor</a>
          </li>
          <li>
            <a href="#">Mayor a menor</a>
          </li>
          <li>
            <a href="#">Hasta $5.000</a>
          </li>
        </ul>

      </ul>

    </div>

    <div class="contenedor-productos">
      <section class="section-productos">
        @foreach ($products as $product)
            <article class="producto">
              <img src="uploads/product_photos/image-test.jpg"  alt="">
              <h2>{{ $product->name }}</h2>
              <h3>${{ $product->price }}</h3>
              <a href="/producto/{{ $product->id }}">Ver más!</a>

              <form class="" action="index.html" method="post">

                  <input type="hidden" name="id-producto" value="{{ $product->id }}">
                  <button type="submit" name="button">COMPRAR</button>
              </form>
            </article>
        @endforeach
      </section>

      <div class="pagination-productos">
      {{$products->links()}}
      </div>

    </div>



  </div>
</section>
@endsection
