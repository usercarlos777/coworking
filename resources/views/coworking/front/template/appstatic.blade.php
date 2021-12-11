<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Coworking</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/slidercat/css/fontslider.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slidercat/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slidercat/css/slidermulti.css')}}">
        <script src="js/slidercat/js/jquery-3.5.1.min.js"></script>
        <script src="js/slidercat/js/popper.min.js"></script>
        <script src="js/slidercat/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('coworking.front.template.partials.menu')
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
        @include('coworking.front.template.partials.footer')
    </body>
</html>
<!-- <main class="rmy-5"> -->
