<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Photo Maker') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('image-popup/source/jquery.fancybox.css?v=2.1.5') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
   
   
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-ar.css') }}">
  
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-en.css') }}">


    <style media="screen">
    /* Contacts Styles */
      input[type="file"] {
          padding: 0;
      }

      .black-box.margin-bottom {
          margin: 0 0 15px;
      }

      .checkbox-holder {
          font-weight: 100;
          position: relative;
          cursor: pointer;
          margin-bottom: 10px;
          display: block;
      }

      .checkbox-holder span {
          vertical-align: middle;
      }

      .checkbox-holder .checkbox-icon {
          width: 13px;
          height: 13px;
          line-height: 7px;
          display: inline-block;
          border: 1px solid #000;
          background: #000;
          text-align: center;
          margin: 0 4px;
      }

      .checkbox-holder input[type="checkbox"] {
          position: absolute;
          opacity: 0;
          cursor: pointer;
      }

      .checkbox-holder .checkbox-icon:after {
          content: '';
          background: #000;
          width: 7px;
          height: 7px;
          display: block;
          margin: 2px;
      }

      .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
          border-color: #00bcd4;
      }

      .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
          background: #00bcd4;
      }

      .main-label {
          border-bottom: 1px dashed #00bcd4;
      }

      .check-open {
          margin-top: 10px;
      }
      /* Services Styles */
      .services li{
        line-height: 30px;
      }
      .services h1{
        margin-bottom: 20px;
      }
    </style>

</head>

<body>
    <div id="app">
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

                      <a href="{{ url('/') }}" class="navbar-brand hidden-sm hidden-md hidden-lg"><img src="{{ asset('images/logo.png') }}" alt="LOGO"></a>
                  </div>

                  <div class="collapse navbar-collapse" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right text-align-left">
                          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">{{ trans('navbar.home') }}</a></li>
                          <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">{{ trans('navbar.about') }}</a></li>
                          <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('services') }}">{{ trans('navbar.services') }}</a></li>
                      </ul>

                      <a href="{{ url('/') }}" class="navbar-brand hidden-xs text-center"><img src="{{ asset('images/logo.png') }}" alt="LOGO"></a>

                      <ul class="nav navbar-nav navbar-left text-align-right">
                          <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{ url('gallery') }}">{{ trans('navbar.gallery') }}</a></li>
                          <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}">{{ trans('navbar.contact') }} </a></li>
                          @if (app()->getLocale() == 'ar')
                            <li><a href="{{ url('lang/en') }}">{{ trans('navbar.langName') }}</a></li>
                          @elseif (app()->getLocale() == 'en')
                            <li><a href="{{ url('lang/ar') }}">{{ trans('navbar.langName') }}</a></li>
                          @endif
                    
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest 
                    </ul>       

              </div>
          </div>
      </nav>
      <main class="user-panel">
            @yield('aside')
        </main>
        

        <main class="py-4">
            @yield('content')
        </main>
        


        <!--===============================
            FOOTER
        ===================================-->

        <footer class="text-center">
            <div class="container">

                <p>{{ trans('footer.copyrights') }} </p>

                <a href="https://facebook.com" target="_blank" data-toggle="tooltip" title="{{ trans('footer.facebook') }}"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.twitter') }}"><i class="fa fa-twitter"></i></a>
                <a href="https://plus.google.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.googlePlus') }}"><i class="fa fa-google-plus"></i></a>
                <a href="https://instagram.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.instgram') }}"><i class="fa fa-instagram"></i></a>
                <a href="https://youtube.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.youtube') }}"><i class="fa fa-youtube"></i></a>
                <a href="https://pinterest.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.pinterest') }}"><i class="fa fa-pinterest"></i></a>
                <a href="https://behance.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.behance') }}"><i class="fa fa-behance"></i></a>
                <a href="https://vimeo.com"  target="_blank" data-toggle="tooltip" title="{{ trans('footer.vimeo') }}"><i class="fa fa-vimeo"></i></a>

            </div>
        </footer>

    </div>

    <!--===============================
        SCRIPT
    ===================================-->

    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('image-popup/source/jquery.fancybox.js?v=2.1.5') }}"></script>
    <script type="text/javascript" src="{{ asset('image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        $(document).ready(function ($){
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
            //tooltip for hover details ...
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>
</html>
