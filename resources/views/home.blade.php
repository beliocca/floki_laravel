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
  <!-- CATEGORIAS -->
  <section class="container home-categorias">
      <div class="row">
          <article class="col-lg-4 col-md-6 mb-4   categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-living.jpg" alt="" />
                  <h2>living</h2>
              </a>
          </article>

          <article class="col-lg-4 col-md-6 mb-4   categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-comedor.jpg" alt="" />
                  <h2>comedor</h2>
              </a>
          </article>

          <article class="col-lg-4 col-md-6 mb-4 categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-cocina.jpg" alt="" />
                  <h2>cocina</h2>
              </a>
          </article>

          <article class="col-lg-4 col-md-6 mb-4 categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-habitacion.jpg" alt="" />
                  <h2>habitacion</h2>
              </a>
          </article>

          <article class="col-lg-4 col-md-6 mb-4 categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-bath.jpg" alt="" />
                  <h2>baño</h2>
              </a>
          </article>

          <article class="col-lg-4 col-md-6 mb-4 categoria">
              <a href="#">
                  <img class="img-fluid" src="images/home/link-oficina.jpg" alt="" />
                  <h2>home office</h2>
              </a>
          </article>
      </div>
  </section>
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
