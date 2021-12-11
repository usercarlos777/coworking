<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Coworking</title>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->

    <link rel="stylesheet" href="{{ asset('front_page/css/mdb.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_page/css/fix.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slidercat/css/sliderhome.css')}}">
    <script src="js/slidercat/js/jquery-3.5.1.min.js"></script>
    <script src="js/slidercat/js/popper.min.js"></script>
    <script src="js/slidercat/js/bootstrap.min.js"></script>

</head>
<body>

  <!--Main Navigation-->
  @include('coworking.front.template.partials.menu')

  <!--Main layout-->
  <main class="my-5 pt-5">
    <div class="container">
         @yield('content')
    </div>
  </main>
  @include('coworking.front.template.partials.footer')


</body>
</html>
