<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">


    </head>
    <body>
        <div class="container">
          <div class="page-header" id="banner">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Superhero</h1>
                <p class="lead">The brave and the blue</p>
              </div>
            </div>
          </div>
          <div class="flex-center position-ref full-height">
              @component('jumbotron')
              @endcomponent
          </div>
        </div>
        <div class="content">
        </div>

        <!-- Javascript -->
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
