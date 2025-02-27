@extends('layouts.templates.' . config("templates.theme.default") . '.app')

@section("header")
  <header id="header" class="header d-flex align-items-center position-relative ">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <x-templates.gp.header.navbar id="navmenu" class="navmenu"/>

    </div>
  </header>
@endsection



@section("content-body")
    <x-templates.gp.sections.hero img="hero4-bg.jpg" >
      <div class="row justify-content-center text-center" >
        <div class="col-xl-6 col-lg-8">
          <img src="{{ asset('vendor/GP_Template/assets/img/Alexis-Mata-Logo-1.png') }}" alt="" srcset="">
        </div>
      </div>
      <div class="row gy-4 mt-5 justify-content-center" >
        <x-templates.gp.partials.icon-box icon="bi bi-file-code" text="Excelencia en Código" />
        <x-templates.gp.partials.icon-box icon="bi bi-cpu" text="Hardware Optimizado" />
        <x-templates.gp.partials.icon-box icon="bi bi-headset" text="Excelente Atención" />
        <x-templates.gp.partials.icon-box icon="bi bi-window-sidebar" text="Soluciones Personalizadas" />
        <x-templates.gp.partials.icon-box icon="bi bi-people-fill" text="Testimonio de Clientes" />
      </div>
    </x-templates.gp.sections.hero>

    <x-templates.gp.sections.about img="about.jpg" >
      <div class="col-lg-6 order-2 order-lg-1 content">
        <h3>Innovación, Creatividad y Experiencia</h3>
        <p class="fst-italic">
          Soy un desarrollador freelance, apasionado por la creación e innovación de software que resuelve problemas, mejora la vida de las personas y marcan la diferencia.
          Mi enfoque se basa en la versatilidad y la adaptabilidad. Mi viaje en el mundo del desarrollo comenzó hace años, y desde entonces, he tenido la oportunidad de trabajar en una amplia variedad de proyectos, desde 
          pequeñas aplicaciones universitarias, pasando por aplicaciones web hasta sistemas de gestión para empresas PYMES.
          <br />
          Mi creatividad y mi pasión por la tecnología me impulsan a explorar nuevas ideas y a desarrollar 
          soluciones únicas. Me especializo en PHP y Laravel, esto me impulsa a la creación de código limpio, mantenible y escalable, y me esfuerzo por aplicar patrones 
          de diseño y principios de Clean Code en cada proyecto. Valoro la colaboración y la comunicación efectiva, y me esfuerzo por construir relaciones sólidas con mis clientes. 
          <br />
          En el ámbito de la interfaz de usuario, tengo experiencia con las tecnologìas de frontend:
        </p>
        <ul>
          <li><i class="bi bi-check2-all"></i> <span><strong>Vue</strong>, un framework progresivo de JavaScript para construir interfaces de usuario interactivas y reactivas.</span></li>
          <li><i class="bi bi-check2-all"></i> <span><strong>React</strong>, una biblioteca de JavaScript para construir interfaces de usuario basadas en componentes reutilizables.</span></li>
          <li><i class="bi bi-check2-all"></i> <span><strong>Livewire</strong>, un framework de Laravel que permite crear interfaces de usuario dinámicas utilizando PHP en el backend.</span></li>
        </ul>
        <p class="fst-italic">
          Combinando la potencia de Laravel en el servidor con la agilidad de Vue, React o Livewire en el cliente, se logran soluciones web que son tanto modernas como altamente eficientes, optimizadas para el rendimiento y la escalabilidad.
        </p>
        <p class="fst-italic">
          Si buscas un desarrollador con experiencia, versátil y comprometido con la calidad, no dudes en contactarme. Descarga mi currículum vitae en español o inglés para obtener más información.
        </p>
        <ul>
          <li><i class="text-danger bi bi-file-arrow-down"></i> <a href="#" class="text-primary">Resumen Curricular - Español.pdf</a></li>
          <li><i class="text-danger bi bi-file-arrow-down"></i> <a href="#" class="text-primary">Resumen Curricular - Inglés.pdf</a></li>
        </ul>
      </div>

    </x-templates.gp.sections.about>

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