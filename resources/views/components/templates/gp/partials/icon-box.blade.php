@props(['icon', 'text', 'aosType', 'aosDelay'])

<div class="col-xl-2 col-md-4" data-aos="{{ $aosType }}" data-aos-delay="{{ $aosDelay }} " data-aos-duration="1250" data-aos-easing="linear">
    <div class="icon-box">
      <i class="{{ $icon }}"></i>
      <h3>{{ $text }}</h3>
    </div>
</div>