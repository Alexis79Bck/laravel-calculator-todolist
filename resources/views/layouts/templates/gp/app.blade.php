<?php
    use App\Services\Templates\MenuItemsService;

    MenuItemsService::setItems(config('templates.menu'));
?>

<!DOCTYPE html>
<html lang="{{  str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ config("app.name") }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        @include("includes.templates.gp.head")

    </head>
    <body class="starter-page-page vh-100">

        @yield("header")

        <main class="main" role="main">

            @yield("page-title")

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