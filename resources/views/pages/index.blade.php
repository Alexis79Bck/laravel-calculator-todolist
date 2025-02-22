@extends('layouts.templates.' . config("templates.theme.default") . '.app')

@section("header")
  <header id="header" class="header d-flex align-items-center position-relative ">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <x-templates.gp.header.brand class="logo d-flex align-items-center me-auto me-lg-0" url="{{ url('/home') }}" />
      <x-templates.gp.header.navbar id="navmenu" class="navmenu"/>

    </div>
  </header>
@endsection

@section("page-title")
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Starter Page</h1>
        </div>
      </div>
    </div>
  </div>
@endsection

@section("content-body")
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title">
          <h2>Section Title</h2>
          <p>Section Summary</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
        <p>Section Content</p>
        </div>

    </section>
@endsection

@push("scriptsJS")
     <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/GP_Template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('vendor/GP_Template/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('vendor/GP_Template/assets/js/main.js')}}"></script>
@endpush