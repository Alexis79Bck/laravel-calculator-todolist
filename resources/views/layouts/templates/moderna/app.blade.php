  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<!DOCTYPE html>
<html lang="{{ config("app.locale") }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ config("app.name") }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        @include("includes.template_moderna.head")

    </head>
    <body class="starter-page-page vh-100">
        @yield("header")

        <main class="main " role="main">
            @yield("page-breadcrumb")

            @yield("content-body")
        </main>

        <footer id="footer" class="footer dark-background">

            <div class="copyright">
            <div class="container text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ config("app.name") }}</strong> <span>All Rights Reserved</span></p>
            </div>
            </div>
        
        </footer>

        @stack("scriptsJS")

    </body>
</html>