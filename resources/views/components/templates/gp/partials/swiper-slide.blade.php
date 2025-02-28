@props(['imageURL','altText'])

<div class="swiper-slide">
    <img src="{{ asset($imageURL) }}" class="img-fluid" alt="{{ $altText }}">
</div>
