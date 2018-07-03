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

                <a href="index.php" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="images/logo.png" alt="LOGO"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li><a href="/index">{{ trans('navbar.home') }}</a></li>
                    <li class="active"><a href="/about">{{ trans('navbar.about') }}</a></li>
                    <li><a href="/services">{{ trans('navbar.services') }}</a></li>
                     </ul>

                <a href="index.php" class="navbar-brand hidden-xs text-center"><img src="upload/{{ $logo->value }}" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="/gallery">{{ trans('navbar.gallery') }}</a></li>
                    <li><a href="/contact">{{ trans('navbar.contact') }}</a></li>
                   @if (app()->getLocale() == 'ar')
                            <li><a href="{{ url('lang/en') }}">{{ trans('navbar.langName') }}</a></li>
                          @elseif (app()->getLocale() == 'en')
                            <li><a href="{{ url('lang/ar') }}">{{ trans('navbar.langName') }}</a></li>
                          @endif
                </ul>
            </div>
        </div>
    </div>
</nav>


<!--===============================
    CONTENT
===================================-->

<div class="fixed-bg">
    <img src="{{ asset('images/1.jpg') }}">
</div>


<div class="main-content services">
    <div class="container">
        <h1 class="main-heading">{{ trans('services.services') }}</h1>

@foreach ($services as $service)
        <div class="border-bottom">
            <h1><strong>{{ $service->title }}</strong></h1>
            <p>{{  $service->body }}</p>
         
            <ul class="list-numbered">
                <li> {{ trans('services.adsType1') }}</li>
                <li>{{ trans('services.adsType2') }}</li>
                <li>{{ trans('services.adsType3') }}</li>
            </ul>
        </div>
@endforeach
      

    </div>
</div>
</footer>


<!--===============================
    SCRIPT
===================================-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>