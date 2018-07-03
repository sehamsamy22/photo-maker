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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    @if (app()->getLocale() == 'ar')
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-ar.css') }}">
    @elseif (app()->getLocale() == 'en')
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style-en.css') }}">
    @endif

    <style>
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
    </style>
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
                    <li ><a href="/about">{{ trans('navbar.about') }}</a></li>
                    <li><a href="/services">{{ trans('navbar.services') }}</a></li>
                </ul>

                <a href="index.php" class="navbar-brand hidden-xs text-center"><img src="upload/{{ $logo->value }}" alt="LOGO"></a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="/gallery">{{ trans('navbar.gallery') }}</a></li>
                    <li class="active"><a href="/contact">{{ trans('navbar.contact') }}</a></li>
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
    <img src="images/1.jpg">
</div>


<div class="main-content">
    <div class="container">
        <h1 class="main-heading">{{ trans('contact.contact') }}</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <form action="{{ url('contact') }}"  method="POST" enctype="multipart/form-data">
                {!!  csrf_field() !!}
                    <input type="text" name="name" placeholder="{{ trans('contact.name') }}">
                    <input type="text" name="activity" placeholder="{{ trans('contact.subject') }}">
                    <input type="tel" name="phone" placeholder="{{ trans('contact.phone') }}">
                    <input type="email" name="email" placeholder="{{ trans('contact.mail') }}">




   <label>نوع الخدمة</label>
             <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon" value="service"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>


                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service" value="food" {{ in_array("food",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>أطعمة ومشروبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service" value="fernture" {{ in_array("fernture",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>أثاث</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service" value="hotel" {{ in_array("hotel",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>فنادق</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service" value="bluilding" {{ in_array("bluilding",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>عقار</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service" value="devices"{{ in_array("devices",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>أجهزة إلكترونية</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service"  value="people"{{ in_array("people",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>أشخاص</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="service"  value="events"{{ in_array("events",$service)?"unchecked":"" }}>
                                        <span class="checkbox-icon"></span>
                                        <span>توثيق مناسبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox">
                                        <span class="checkbox-icon"></span>
                                        <span> (يرجى التحديد )أخرى </span>
                                    </label>

                                    <input type="text" placeholder="">

                                    <label>عدد الصور</label>
                                    <input type="number" name="number" placeholder="عدد الصور">

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="attribute" value="empty background" >
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="attribute" value="composite background">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مركبة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="attribute" value="normal">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير بالشكل الطبيعي</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="attribute" value="poeple photo">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين  ( تصوير الأشخاص)</span>
                                    </label>


                                </div>
                            </div>
                        </div>
                        </div>

                  
                   
                   <label>{{ trans('contact.upload') }}</label>
                    <input type="file" name="file" placeholder="{{ trans('contact.upload') }}">
                    <div class="btn btn-white btn-block">
                        <span><input type="submit" value="{{ trans('contact.contact') }}"></span>
                    </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">تفاصيل الاتصال</h3>
                
                    <p><i class="fa fa-envelope-o right-fa"></i> {{ $contact_email->value }}</p>
                    <p><i class="fa fa-phone right-fa"></i> {{$contact_phone->value }}</p>
                            
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">إشترك معنا</h3>

                    <form>
                        <input type="email" placeholder="بريدك الالكتروني">
                        <div class="btn btn-white btn-block">
                            <span><input type="submit" value="إشترك معنا"></span>
                        </div>
                    </form>
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
<script>
    $(document).ready(function (){
        $('.check-open').slideUp(0);

        $('.main-label .checkbox-holder').click(function (){
            if($(this).find('input').is(':checked')) {
                $(this).parents('.main-label').next('.check-open').stop().slideDown();
            } else {
                $(this).parents('.main-label').next('.check-open').stop().slideUp();
            }
        });
    });
</script>
<script src="js/script.js"></script>
</body>
</html>