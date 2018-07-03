<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    @if (app()->getLocale() == 'ar')
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-ar.css') }}">
    @elseif (app()->getLocale() == 'en')
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-en.css') }}">
    @endif
</head>

<body>

<!--===============================
    NAV
===================================-->

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="index.php" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="upload/{{ $logo->value }}" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                  <li class="active"><a href="/index">{{ trans('navbar.home') }}</a></li>
                    <li ><a href="/about">{{ trans('navbar.about') }}</a></li>
                    <li><a href="/services">{{ trans('navbar.services') }}</a></li>
     
                </ul>

                <a href="index.php" class="navbar-brand hidden-xs text-center"><img src="upload/{{ $logo->value }}" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                     <li><a href="/gallery">{{ trans('navbar.gallery') }}</a></li>
                    <li><a href="/contact">{{ trans('navbar.contact') }}</a></li>
                  <li>
                   
                   @if (app()->getLocale() == 'ar')
                            <li><a href="{{ url('lang/en') }}">{{ trans('navbar.langName') }}</a></li>
                          @elseif (app()->getLocale() == 'en')
                            <li><a href="{{ url('lang/ar') }}">{{ trans('navbar.langName') }}</a></li>
                          @endif
                
                   
                 
                  
               
                    
  
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!--===============================
    SLIDER
===================================-->

<div id="owl-demo" class="owl-carousel owl-theme">
@foreach ($backgrounds as $background)
    <div class="item"><img src="upload/{{ $background->url }}" alt="..."></div>
    
@endforeach
</div>

<div class="hidden">
    <a class="btn owl-btn next"><span class="fa fa-angle-right"></span></a>
    <a class="btn owl-btn prev"><span class="fa fa-angle-left"></span></a>
</div>


<!--===============================
    FOOTER
===================================-->

<footer class="navbar-fixed-bottom text-center">
    <div class="container">

        <p>
              {{ trans('footer.copyrights') }} </p>

       <a href="{{ $settings->facebook_icon }}"><i class="fa fa-facebook" ></i></a>
        <a href="{{ $settings->twitter_icon }}"><i class="fa fa-twitter"></i></a>
        <a href="{{ $settings->google_icon }}"><i class="fa fa-google-plus"></i></a>
        <a href="{{ $settings->behance_icon }}"><i class="fa fa-behance"></i></a>
        <a href="{{ $settings->vemo_icon }}"><i class="fa fa-vimeo"></i></a>


    </div>
</footer>


<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="owl-carousel/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>