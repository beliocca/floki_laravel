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
              <a href="#">
                  <img class="" src="images/home/link-living.jpg" alt="" />
                  <h2>living</h2>
              </a>
          </article>

          <article class=" categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-comedor.jpg" alt="" />
                  <h2>comedor</h2>
              </a>
          </article>

          <article class=" categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-cocina.jpg" alt="" />
                  <h2>cocina</h2>
              </a>
          </article>

          <article class=" categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-habitacion.jpg" alt="" />
                  <h2>habitacion</h2>
              </a>
          </article>

          <article class="categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-bath.jpg" alt="" />
                  <h2>baño</h2>
              </a>
          </article>

          <article class="categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-oficina.jpg" alt="" />
                  <h2>home office</h2>
              </a>
          </article>

  </section>

  <div class="home-stripe">
    <h1>NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 </h1>
  </div>

{{-- productos destacados --}}
  <section class="productos-top">
      @foreach ($topProducts as $product)
        @foreach ($productPhotos as $productPhoto)
            @if ($product->id == $productPhoto->product_id)
                @php
                  $photos[] = $productPhoto->filename;
                @endphp
            @endif
        @endforeach


        <article class="producto-top">
          <div class="producto-top-photo">
            <img src="uploads/product_photos/image-test.jpg" alt="">
          </div>
          <h2>{{ $product->name }}</h2>
          <h3>${{ $product->price }}</h3>

          <a href="/producto/{{ $product->id }}">Ver más</a>
        </article>
      @endforeach

  </section>
@endsection
