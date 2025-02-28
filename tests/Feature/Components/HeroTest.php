<?php

namespace Tests\Feature\Components;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeroTest extends TestCase
{
    /** @test **/
    public function hero_section_renders_correctly(): void
    {
        $component = $this->blade('
            <x-templates.gp.sections.hero img="hero4-bg.jpg" >
      <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 col-lg-8">
          <p class="h1 text-danger" >Bienvenidos a Mi Sitio</p>
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <x-templates.gp.partials.icon-box icon="bi bi-file-code" text="Excelencia en Código" aosType="fade-up" aosDelay="500"/>
        <x-templates.gp.partials.icon-box icon="bi bi-cpu" text="Optimización y Rendimiento" aosType="fade-in" aosDelay="750"/>
        <x-templates.gp.partials.icon-box icon="bi bi-headset" text="Excelente Atención" aosType="flip-right" aosDelay="1000"/>
        <x-templates.gp.partials.icon-box icon="bi bi-window-sidebar" text="Soluciones Personalizadas" aosType="zoom-in-up" aosDelay="1250"/>
        <x-templates.gp.partials.icon-box icon="bi bi-people-fill" text="Testimonio de Clientes" aosType="fade-down" aosDelay="1500"/>
      </div>
    </x-templates.gp.sections.hero>
        ');

        $component->assertSeeText('Bienvenidos a Mi Sitio');
        $component->assertSee('Soluciones Personalizadas');
        $component->assertSee('hero4-bg.jpg');
        $component->assertSeeInOrder(['Excelencia', 'Código', 'Rendimiento','Atención', 'Testimonio', 'Clientes']);
    }
}
