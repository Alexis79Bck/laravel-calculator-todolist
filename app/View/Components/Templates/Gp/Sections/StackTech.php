<?php

namespace App\View\Components\Templates\Gp\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StackTech extends Component
{
    public $swiperConfig;
    public $swiperSlides;

    public function __construct()
    {
        $this->swiperConfig = [
            "loop" => true,
            "speed" => 600,
            "autoplay" => ["delay" => 5000],
            "slidesPerView" => "auto",
            "pagination" => ["el" => ".swiper-pagination", "type" => "bullets", "clickable" => true],
            "breakpoints" => [
                "320" => ["slidesPerView" => 2, "spaceBetween" => 40],
                "480" => ["slidesPerView" => 3, "spaceBetween" => 60],
                "640" => ["slidesPerView" => 4, "spaceBetween" => 80],
                "992" => ["slidesPerView" => 6, "spaceBetween" => 120]
            ]
        ];

        $this->swiperSlides = [
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-1.png', 'altText' => 'Tech 1'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-2.png', 'altText' => 'Tech 2'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-3.png', 'altText' => 'Tech 3'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-4.png', 'altText' => 'Tech 4'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-5.png', 'altText' => 'Tech 5'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-6.png', 'altText' => 'Tech 6'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-7.png', 'altText' => 'Tech 7'],
            ['imageUrl' => 'vendor/GP_Template/assets/img/clients/client-8.png', 'altText' => 'Tech 8'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.templates.gp.sections.stack-tech');
    }
}
