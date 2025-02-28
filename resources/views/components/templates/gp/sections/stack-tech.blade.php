<section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
            {!! json_encode($swiperConfig) !!}
        </script>

        <div class="swiper-wrapper align-items-center">
            @foreach ($swiperSlides as $slide)
                <x-templates.gp.partials.swiper-slide imageURL="{{ $slide['imageUrl'] }}" altText="{{ $slide['altText'] }}"/>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>