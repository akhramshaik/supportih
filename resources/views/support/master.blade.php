<!doctype html>
<!--[if lt IE 7]>       
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>          
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>          
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]><!-->  
         <html class="no-js" lang="zxx">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <title>I Support Babu Gogineni - Indian Humanists </title>
               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <link rel="apple-touch-icon" href="apple-touch-icon.png">
               <link rel="icon" href="images/favicon.ico" type="image/x-icon">
               <link rel="stylesheet" href="{{ asset('support/css/bootstrap.min.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/font-awesome.min.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/main.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/color.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/owl.carousel.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/normalize.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/responsive.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/transitions.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/animate.css') }}">
               <link rel="stylesheet" href="{{ asset('support/css/scrollbar.css') }}">
               <script src="{{ asset('support/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
            </head>
            <body class="tg-hometwo">
               <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
               <![endif]-->
               <div class="preloader-outer">
                  <div class='loader'>
                     <div class='loader--dot'></div>
                     <div class='loader--dot'></div>
                     <div class='loader--dot'></div>
                     <div class='loader--dot'></div>
                     <div class='loader--dot'></div>
                  </div>
               </div>
               <div id="tg-searcharea" class="tg-searcharea">
                  <form class="tg-formtheme tg-formsearch">
                     <fieldset>
                        <input type="search" name="search" class="form-control" placeholder="Start your search from here...">
                        <button type="button"><i class="icon-arrow-right"></i></button>
                     </fieldset>
                  </form>
                  <a id="tg-btnclosesearch" class="tg-btnclosesearch" href="javascript:void(0);"><i class="icon-cross"></i></a>
               </div>
               <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
               @include('support.master_header')
               @yield('content')
               @include('support.master_footer')
            </body>
         </html>