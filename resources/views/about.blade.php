<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="image-popup/source/jquery.fancybox.css?v=2.1.5" media="screen">
    <link rel="stylesheet" type="text/css" href="image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5">
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
                       
                            <li><a href="{{ url('lang/en') }}">
                            {{ trans('navbar.langName') }}</a></li>
                        
                    
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
    <img src="images/1.jpg">
</div>



<div class="main-content">
    <div class="container">
        <h1 class="main-heading">{{ trans('about.about') }}</h1>

        <div class="text-center div-padding">
     
   
            <p>{{ strip_tags($abouts->value) }}</p>
           
            <a href="/download" target="_blank" class="btn btn-white margin"><span>{{ trans('about.loadProfile') }}</span></a>
            <a href="gallery" class="btn btn-white margin"><span>{{ trans('about.showWork') }}</span></a>
        
        </div>

        <div class="div-small-padding">
            <h1 class="main-heading">{{ trans('about.sponsers') }}</h1>

            <div class="row">
                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn prev-pro margin"><span class="fa fa-angle-right"></span></a>
                </div>

                <div class="col-xs-8 col-sm-10 no-padding">
                    <div id="owl-demo-products" class="owl-carousel-clients">
                       
                        
                      
                        @foreach ($customers as $customer)
                       
                       
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-2.jpg">
                                <img src="upload/{{ $customer->image }}" width="100px" height="100px" alt="img">
                            </a>
                        </div>
                     @endforeach  
                    </div>
                </div>

                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn next-pro margin"><span class="fa fa-angle-left"></span></a>
                </div>
            </div>
        </div>

    </div>
</div>


<!--===============================
    FOOTER
===================================-->

<footer class="text-center">
    <div class="container">

        <p>جميع الحقوق محفوظة لمؤسسة صانع الصورة للتجارة  &copy; 2005-2015 </p>

       <a href="{{ $settings->facebook_icon }}"><i class="fa fa-facebook"></i></a>
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
<script type="text/javascript" src="image-popup/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script src="js/script.js"></script>
<script>
    $(document).ready(function (){
        /*Button helper. Disable animations, hide close button, change title type and content*/

        $('.fancybox-buttons').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons	: {}
            },

            afterLoad : function() {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });
    });
</script>
</body>
</html>