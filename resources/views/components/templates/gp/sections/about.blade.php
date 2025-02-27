@props(['img'])

<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      {{ $slot }}
      <div class="col-lg-6 order-1 order-lg-3">
        <img src="{{ asset('vendor/GP_Template/assets/img/' . $img) }}" class="img-fluid" alt="">
      </div>
    </div>
    
  </div>

</section>