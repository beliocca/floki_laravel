@extends('layouts/floki-template')

@section('title', 'Inspiráte! FLOKI Deco & Design')


@section('content')


  <div class="home-stripe">
    <h1>NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 // NEW COLLECTION FALL-WINTER '19 </h1>
  </div>

  <!--carrusel con imagenes interactivas -->
  <section id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="imagen-interactiva slider1 carousel-item active">
              <img src="images/slider2/slider1.jpg" alt="" />
              <div class="producto-oculto1">
                  <a href="">
                      <img class="icon" src="images/slider2/imageicon.png" alt="" />
                      <img class="producto-interactivo" src="images/slider2/slider1product.jpg" alt="" />
                  </a>
              </div>
              <div class="producto-oculto2">
                  <a href="">
                      <img class="icon" src="images/slider2/imageicon.png" alt="" />
                      <img class="producto-interactivo" src="images/slider2/slider1product2.jpg" alt="" />
                  </a>
              </div>
              <div class="producto-oculto3">
                  <a href="">
                      <img class="icon" src="images/slider2/imageicon.png" alt="" />
                      <img class="producto-interactivo" src="images/slider2/slider1product3.jpg" alt="" />
                  </a>
              </div>
              <div class="producto-oculto4">
                  <a href="">
                      <img class="icon" src="images/slider2/imageicon.png" alt="" />
                      <img class="producto-interactivo" src="images/slider2/slider1product4.jpg" alt="" />
                  </a>
              </div>
          </div>
          <div class="imagen-interactiva slider2 carousel-item">
              <img src="images/slider2/slider2.jpg" alt="" />
              <div class="producto-oculto1">
                  <a href="">
                      <img class="icon" src="images/slider2/imageicon.png" alt="" />
                      <img class="producto-interactivo" src="images/slider2/slider2product1.jpg" alt="" />
                  </a>
              </div>
              <div class="producto-oculto2">
                  <a href="">
                      <img class="icon" src="images/slider2/imageicon.png" alt="" />
                      <img class="producto-interactivo" src="images/slider2/slider2product2.jpg" alt="" />
                  </a>
              </div>
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
</section>
@endsection
