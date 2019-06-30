@extends('layouts/floki-template')

@section('title', 'FLOKI Deco & Design')


@section('content')
  <!-- carrusel 1 -->
  <section id="carouselExampleFade" class="carousel slide carousel-fade d-none d-sm-block" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="images/slider1/mainslider1.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
              <img src="images/slider1/mainslider2.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
              <img src="images/slider1/mainslider3.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
              <img src="images/slider1/mainslider4.jpg" class="d-block w-100" alt="..." />
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </section>

  <div class="home-stripe">
    <h1>NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 </h1>
  </div>


  <!-- CATEGORIAS -->
  <section class=" home-categorias">
          <article class=" categoria">
            <img class="img-fluid" src="images/home/link-living.jpg" alt="" />
          <a href="/shop/living">
              <div class="texto-categoria">
              <h1>Living</h1>
            </div>
        </a>
          </article>

          <article class=" categoria">
            <img class="img-fluid" src="images/home/link-comedor.jpg" alt="" />
          <a href="/shop/comedor">
              <div  class="texto-categoria">
              <h1>Comedor</h1>
            </div>
        </a>
          </article>

          <article class=" categoria">
            <img class="img-fluid" src="images/home/link-cocina.jpg" alt="" />
          <a href="/shop/cocina">
              <div class="texto-categoria">
              <h1>Cocina</h1>
            </div>
        </a>
          </article>

          <article class=" categoria">
            <img class="img-fluid" src="images/home/link-habitacion.jpg" alt="" />
          <a href="/shop/dormitorio">
              <div class="texto-categoria">
              <h1>Dormitorio</h1>
            </div>
        </a>
          </article>

          <article class="categoria">
            <img class="img-fluid" src="images/home/link-bath.jpg" alt="" />
          <a href="/shop/bath">
              <div class="texto-categoria">
              <h1>Baño</h1>
            </div>
        </a>
          </article>

          <article class="categoria">

                  <img class="img-fluid" src="images/home/link-oficina.jpg" alt="" />
                <a href="/shop/office">
                    <div class="texto-categoria">
                    <h1>home office</h1>
                  </div>
              </a>
          </article>

  </section>

  <div class="home-stripe">
    <h1>NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 </h1>
  </div>

{{-- productos destacados --}}
  <section class="productos-top">
    @foreach ($topProducts as $product)

      <article class="producto-top">
        <div class="producto-top-photo">
        <img src="uploads/product_photos/{{$product->productPhotos->first()}}" alt="">
        </div>
        <h2>{{ $product->name }}</h2>
        <h3>${{ $product->price }}</h3>

        <a href="/producto/{{ $product->id }}">Ver más</a>
      </article>
    @endforeach
  </section>
@endsection
