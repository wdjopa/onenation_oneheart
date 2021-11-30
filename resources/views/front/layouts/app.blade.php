
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Lovecare - Free Bootstrap 5 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset("lovecare/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("lovecare/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("lovecare/css/tiny-slider")}}.css">
    <link rel="stylesheet" href="{{asset("lovecare/css/glightbox.min")}}.css">
    <link rel="stylesheet" href="{{asset("lovecare/css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("lovecare/css/style.css")}}">
  </head>
  <body>

    @include('front.layouts.header')

    @yield('content')

    @include('front.layouts.footer')

    
  <script src="{{asset("lovecare/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("lovecare/js/tiny-slider.js")}}"></script>
  <script src="{{asset("lovecare/js/glightbox.min.js")}}"></script>
  <script src="{{asset("lovecare/js/aos.js")}}"></script>
  <script src="{{asset("lovecare/js/rellax.min.js")}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset("lovecare/js/google-map.js")}}"></script>
  <script src="{{asset("lovecare/js/main.js")}}"></script>
    
  </body>
</html>