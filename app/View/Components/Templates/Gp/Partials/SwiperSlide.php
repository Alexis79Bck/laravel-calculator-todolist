<?php

namespace App\View\Components\Templates\Gp\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SwiperSlide extends Component
{
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.templates.gp.partials.swiper-slide');
    }
}
