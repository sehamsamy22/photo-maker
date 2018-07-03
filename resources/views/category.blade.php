<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Photo Maker</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
                    <li><a href="/index">الرئيسية</a></li>
                    <li><a href="/about">من نحن</a></li>
                    <li><a href="/services">خدماتنا</a></li>
                </ul>

                <a href="index.php" class="navbar-brand hidden-xs text-center"><img src="images/logo.png" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li class="active"><a href="/gallery">معرض الصور</a></li>
                    <li><a href="/contact">اتصل بنا</a></li>
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


<div class="main-content">
    <div class="container-fluid">
   
        <h1 class="main-heading">{{ $name }} </h1>

        <div class="row">
 @foreach ($images as $image)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="images/1.jpg">
                    <img src="/upload/{{ $image->url }}" alt="img">
                </a>
            </div>
@endforeach
           
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
<script type="text/javascript" src="image-popup/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
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
                this.title = '<a href="#" class="btn btn-fb btn-small"><i class="fa fa-facebook right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-tw btn-small"><i class="fa fa-twitter right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-inst btn-small"><i class="fa fa-instagram right-fa"></i> Share</a>';
            }
        });


    });
</script>
<script src="js/script.js"></script>
</body>
</html>