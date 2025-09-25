<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- META
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="{{ $description ?? config('app.name') }}"/>
    @if(!empty($keyword))
        <meta name="keywords" content="{{ $keyword }}"/>
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="language" content="fr"/>
    <meta name="copyright" content=""/>
    <meta name="author" content="Guerth Manzala"/>
    <meta property="og:title" content="{{ $title ?? config('app.name') }}"/>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:url" content="{{ Request::url() }}"/>
    <meta property="og:language" content="{{ app()->getLocale() }}"/>
    <meta property="og:description" content="{{ $description ?? config('app.name') }}"/>
    <meta property="og:image" content="{{ $image ?? asset('images/meta_image.jpg')  }}"/>

    <!-- Schema.org meta pour Google+ -->
    <meta itemprop="name" content="{{ $title ?? config('app.name') }}">
    <meta itemprop="description" content="{{ $description ?? config('app.name') }}">
    <meta itemprop="image" content="{{ $image ?? asset('images/meta_image.jpg')  }}">

    <!-- Card meta pour Twitter -->
    <meta name="twitter:card" content="{{ $image ?? asset('images/meta_image.jpg')  }}">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="{{ $title ?? config('app.name') }}">
    <meta name="twitter:description" content="{{ $description ?? config('app.name') }}">
    <!-- Twitter summary card avec image large de 280x150px -->
    <meta name="twitter:image:src" content="{{ $image ?? asset('images/meta_image.jpg')  }}">
    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="author" href="{{ asset('humans.txt') }}" content=""/>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,200&display=swap"
          rel="stylesheet">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">



    <livewire:styles/>
    <script src="{{ asset('js/toggleForm.js') }}" defer></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        [x-cloak] {display: none!important;}
        .theme-demos {
            display: none !important;
        }

        .blue-night {
            background: #3961ab !important;
            border-color: #3961ab !important;
            color: white !important;
        }

        .text-blue-night {
            color: #3961ab !important;
        }

        #social-links ul li a, .xs-social-list li a, .xs-social-list-v2 li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
            position: relative;
            z-index: 1;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
            display: block;
            text-align: center;
            border-radius: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            font-size: 1.07143em;
            color: #FFFFFF;
        }

        #social-links ul li {
            display: inline-block;
            margin: 0 10px 0 0;
        }
        .xs-social-list li a:hover, .xs-social-list-v2 li a:hover {
            border-color: transparent;
            background-color: #e93b3a;
        }

        .xs-social-list li a.color-facebook:hover, .xs-social-list-v2 li a.color-facebook:hover {
            background-color: #3b5998;
        }

        .xs-social-list li a.color-twitter:hover, .xs-social-list-v2 li a.color-twitter:hover {
            background-color: #1da1f2;
        }

        .xs-social-list li a.color-dribbble:hover, .xs-social-list-v2 li a.color-dribbble:hover {
            background-color: #ea4c89;
        }

        .xs-social-list li a.color-pinterest:hover, .xs-social-list-v2 li a.color-pinterest:hover {
            background-color: #bd081c;
        }

        .xs-social-list li a.color-instagram:hover, .xs-social-list-v2 li a.color-instagram:hover {
            background-color: #e1306c;
        }

        .xs-social-list li a.color-linkedin:hover, .xs-social-list-v2 li a.color-linkedin:hover {
            background-color: #dd5143;
        }


        .xs-social-list.square li a, .square.xs-social-list-v2 li a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 0%;
            border: 1px solid #F4F4F4;
            background-color: transparent;
            color: #e93b3a;
        }

        .xs-social-list.square li a:hover, .square.xs-social-list-v2 li a:hover {
            color: #FFFFFF;
        }

        .xs-social-list.simple li, .simple.xs-social-list-v2 li {
            margin-right: 15px;
        }

        .xs-social-list.simple li a, .simple.xs-social-list-v2 li a {
            color: #e93b3a;
            border: 0;
            width: auto;
            height: auto;
            line-height: 0;
            background-color: transparent;
        }

        .xs-social-list.simple li a:hover, .simple.xs-social-list-v2 li a:hover {
            background-color: transparent;
            border: 0;
        }

        .xs-social-list.simple li a.color-facebook:hover,
        .xs-social-list.simple li a.color-facebook,

        .simple.xs-social-list-v2 li a.color-facebook:hover,
        .simple.xs-social-list-v2 li a.color-facebook {
            background: #3b5998 !important;
        }

        .xs-social-list.simple li a.color-twitter:hover, .simple.xs-social-list-v2 li a.color-twitter:hover {
            color: #1da1f2;
        }

        .xs-social-list.simple li a.color-dribbble:hover, .simple.xs-social-list-v2 li a.color-dribbble:hover {
            color: #ea4c89;
        }

        .xs-social-list.simple li a.color-pinterest:hover, .simple.xs-social-list-v2 li a.color-pinterest:hover {
            color: #bd081c;
        }

        .xs-social-list.simple li a.color-instagram:hover, .simple.xs-social-list-v2 li a.color-instagram:hover {
            color: #e1306c;
        }

        .xs-social-list.simple li a.color-linkedin:hover, .simple.xs-social-list-v2 li a.color-linkedin:hover {
            color: #dd5143;
        }

        .xs-social-list.simple li:last-child, .simple.xs-social-list-v2 li:last-child {
            margin-right: 0;
        }

        .xs-social-list.boxed li, .boxed.xs-social-list-v2 li {
            width: 45%;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .xs-social-list.boxed li a, .boxed.xs-social-list-v2 li a {
            text-transform: uppercase;
            background-color: transparent;
            border: 1px solid #F1F1F1;
            color: #485E92;
            font-size: 0.85714em;
            height: auto;
            width: 100%;
            padding: 14px 0px;
            font-weight: 700;
            border-radius: 0%;
            line-height: normal;
        }

        .xs-social-list.boxed li a:hover, .boxed.xs-social-list-v2 li a:hover {
            color: #FFFFFF;
        }

        .xs-social-list.boxed li i, .boxed.xs-social-list-v2 li i {
            padding-right: 15px;
        }

        .xs-social-list-v2 li a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border: 1px solid #55acee;
            background-color: transparent;
            font-size: 1em;
        }

        #social-links ul li a, .xs-social-list li a {
            width: 35px !important;
            height: 35px !important;
            border-radius: 5px !important;
            line-height: 34px !important;
            color: #FFF!important;

        }
        #social-links ul li a.color-facebook, .xs-social-list li a.color-facebook {
            background-color: #3b5998 !important;
        }

        #social-links ul li a.color-twitter, .xs-social-list li a.color-twitter {
            background-color: #1da1f2 !important;
        }
        #social-links ul li a.color-whatsapp, .xs-social-list li a.color-whatsapp {
            background-color:#25D366 !important;
        }


        #social-links ul li a.color-telegram, .xs-social-list li a.color-telegram {
            background-color:#0088cc !important;
        }
        #social-links ul{
            padding: 0 !important;
        }
        code {
            font-size: 14px;
            color: #0A70B8 !important;
        }
        .latest-post-sidebar li {
            margin-bottom: 5px;
        }
        {{--@if(request()->is('blogs') || request()->is('blogs/*'))
            .nav-item .nav-link {
            color: #232323 !important;
        }
        @endif--}}
        .tr-post{
            min-height: 575px ;
            max-height: 550px ;
            position: relative ;
        }
        .tr-post .entry-footer{
            position: absolute;
            bottom: 25px;
        }
        @media (max-width: 767px){
            .tr-post{
                position: initial !important;
                min-height: auto !important;
                max-height: 100% !important;
            }
            .tr-post .entry-footer{
                position: initial !important;
                bottom: 0 !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="full-screen-menu"
      data-mobile-nav-bg-color="#333a3a">
<!-- start header -->

<!-- start header -->
@include('partials._header')
<!-- end header -->

{{$slot}}

@include('partials._footer')

<!-- javascript -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/theme-vendors.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<livewire:scripts/>
<script>
    if ($('.xs-banner-slider').length > 0) {
        let bannerSlider = $(".xs-banner-slider");
        bannerSlider.owlCarousel({
            items: 1,
            loop: true,
            mouseDrag: true,
            touchDrag: true,
            dots: false,
            nav: true,
            navigation : true, // Show next and prev buttons
           navText: ['<i class="fa fa-angle-left xs-round-nav"></i>', '<i class="fa fa-angle-right xs-round-nav"></i>'],
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                // breakpoint from 0 up
                0: {
                    nav: false,
                },
                // breakpoint from 480 up
                480: {
                    nav: false,
                },
                // breakpoint from 768 up
                991: {
                    nav: true,
                }
            }
        });
    }
    (function () {
        'use strict';
        // ENABLE sidebar menu tabs
        $('.js-sidebar-mini-tabs [data-toggle="tab"]').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        $('.js-sidebar-mini-tabs').on('show.bs.tab', function (e) {
            $('.js-sidebar-mini-tabs > .active').removeClass('active')
            $(e.target).parent().addClass('active')
        })
    })()

</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('js/alert.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>

