@props(['img'])

<section id="hero" class="hero section dark-background">
   
    <img src="{{ asset('vendor/GP_Template/assets/img/' .  $img ) }}" alt="{{ $img }}" data-aos="fade-in">

    <div class="container">

      {{ $slot }}

    </div>

  </section>