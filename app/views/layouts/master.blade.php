<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Echo.Dev</title>
    {{ HTML::style('css/foundation.css') }}
    {{ HTML::script('js/vendor/modernizr.js') }}
  </head>
  <body>

    <!-- Header and Nav -->
    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="#">Echo</a></h1>
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <br>
      @yield('content')
    </div>

    <!-- Footer -->

    <footer class="row">
      <div class="column">
        <hr />
        <p>Echo.Dev</p>
      </div>
    </footer>


    {{ HTML::script('js/vendor/jquery.js') }}
    {{ HTML::script('js/foundation.min.js') }}
    {{ HTML::script('js/app.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
