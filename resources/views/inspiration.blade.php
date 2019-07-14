@extends('layouts/floki-template')

@section('title', 'Inspiráte! FLOKI Deco & Design')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/inspiracion.css') }}"/>
@endsection


@section('content')

<section>

  <div class="inspiracion-parallex">
      <div class="inspiracion-title">
          <h1>Scandinavian</h1>
      </div>
  </div>

  <p>TEXT sobre style</p>

  <div class="inspo-style-carousel">

    <i id="previousPhoto" class="fas fa-chevron-left"></i>

      <img src="{!! asset('images/inspiracion/styles/scandinavian1.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/scandinavian2.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/scandinavian3.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/scandinavian4.jpg') !!}" alt="">

    <i id="previousPhoto" class="fas fa-chevron-right"></i>

  </div>

</section>

<section>

  <div class="inspiracion-parallex">
      <div class="inspiracion-title">
          <h1>Boho</h1>
      </div>
  </div>

  <p>TEXT sobre style</p>

  <div class="inspo-style-carousel">

    <i id="previousPhoto" class="fas fa-chevron-left"></i>

      <img src="{!! asset('images/inspiracion/styles/boho1.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/boho2.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/boho3.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/boho4.jpg') !!}" alt="">

    <i id="previousPhoto" class="fas fa-chevron-right"></i>

  </div>

</section>

<section>

  <div class="inspiracion-parallex">
      <div class="inspiracion-title">
          <h1>Shabby chic</h1>
      </div>
  </div>

  <p>TEXT sobre style</p>

  <div class="inspo-style-carousel">

    <i id="previousPhoto" class="fas fa-chevron-left"></i>

      <img src="{!! asset('images/inspiracion/styles/shabby1.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/shabby2.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/shabby3.jpg') !!}" alt="">
      <img src="{!! asset('images/inspiracion/styles/shabby4.jpg') !!}" alt="">

    <i id="previousPhoto" class="fas fa-chevron-right"></i>

  </div>

</section>

@endsection
