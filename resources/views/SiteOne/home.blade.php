@extends('SiteOne.master')
@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{asset('Siteasset/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Kelly Adams</h2>
            <p>I'm a professional illustrator from San Francisco</p>
            <a href="about.html" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>


@endsection

