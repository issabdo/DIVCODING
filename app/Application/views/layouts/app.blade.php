<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108424096-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108424096-1');
</script>

  <!-- Required Meta Tag -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Meta for SEO -->
   <meta name="description" content="">
   <meta name="keywords" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Title And Favicon Of The Document -->
    <title>{{ config('app.name', getSetting('siteTitle')) }}</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" >

    <!-- Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Bootstrap  Style -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- animate Css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- magnific popup Css -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- OWL carousel Css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Style css  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- responsive css  -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    @if(getDir() == 'rtl')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    @endif

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">
  <header>
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="coding-nav-wrapper">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#coding-menu" aria-expanded="false">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
            <a href="#" class="navbar-brand">
                <h3>{{getSetting('siteTitle')}}</h3>
            </a>
          </div>
          <div id="coding-menu" class="collapse navbar-collapse">
            <ul class='nav navbar-nav'>
              <li><a class="smooth-scroll" href="#home">{{ adminTrans('website' , 'home') }}</a></li>
              <li><a class="smooth-scroll" href="#services">{{ adminTrans('website' , 'service') }}</a></li>
              <li><a class="smooth-scroll" href="#about">{{ adminTrans('website' , 'about') }}</a></li>
              <li><a class="smooth-scroll" href="#team">{{ adminTrans('website' , 'team') }}</a></li>
              <li><a class="smooth-scroll" href="#contact">{{ adminTrans('website' , 'contact') }}</a></li>
            </ul>
          </div>

        </div>
      </div>
    </nav>
  </header>

        @yield('content')


        <!-- Footer -->

            <footer>
                 <div id='contact'>
                   <div class="container">
                     <div class="row">
                        <div class="col-md-6">
                          <div id="contact-left">
                            <h3>{{getSetting('siteTitle')}}</h3>
                            <p>
                              {{ adminTrans('website' , 'about-2') }}
                            </p>
                            <div id='contact-info'>
                              <address>
                                <strong>{{ adminTrans('website' , 'headquarters') }}</strong><br>
                                <p>{{ adminTrans('website' , 'address') }}<br>
                                 TEMARA,MAROC
                                </p>
                                <div id='phone-fax-email'>
                                  <strong>{{ adminTrans('website' , 'phone') }}</strong><span> {{getSetting('Phone1')}} / {{getSetting('Phone2')}}</span><br>
                                  <strong>{{ adminTrans('website' , 'email1') }}</strong><span> {{getSetting('Email')}}</span><br>
                                 
                                </div>
                              </address>
                            </div>
                          </div>
                         <!--  <ul class="social-list">
                            <li><a href="{{getSetting('facebook')}}" class="social-icon icon-white"><i class='fa fa-facebook'></i></a></li>
                            <li><a href="#" class="social-icon icon-white"><i class='fa fa-twitter'></i></a></li>
                            <li><a href="#" class="social-icon icon-white"><i class='fa fa-youtube-play'></i></a></li>
                            <li><a href="#" class="social-icon icon-white"><i class='fa fa-google-plus'></i></a></li>
                          </ul> -->
                        </div>
                        <div class="col-md-6">
                           <div id="contact-right">
                             <h3>{{ adminTrans('website' , 'contactus') }}</h3>
                             <form action="{{ concatenateLangToUrl('contact-message') }}" method="post" >
                                 {{ csrf_field() }}
                                 <div class="form-group col-md-12">
                                     <div id='errorsConatct'></div>
                                     <div id='successConatct'></div>
                                 </div>
                                 <input type="text" id='name' name="name" value="{{  old('name') }}" placeholder="{{adminTrans('website' , 'name')}}" class="form-control">
                                 <input type="text" id='email' name="email" value="{{  old('email') }}" placeholder="{{adminTrans('website' , 'email')}}" class="form-control">
                                 <textarea id='message' name="message" rows="5" placeholder="{{adminTrans('website' , 'message')}}" class="form-control">{{  old('message') }}</textarea>
                                 <div id="send-btn">
                                   <button  id='btnContact'  class="btn btn-lg btn-general btn-white" type="button" >{{adminTrans('website' , 'send')}}</button>
                                 </div> 
                             </form>
                           </div>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div id="footer-bottom">
                   <div class="container">
                     <div class="row">
                       <div class="col-md-6">
                           <div id="footer-copyrights">
                             <p>{{adminTrans('website' , 'copyright')}} {{getSetting('siteTitle')}}</p>
                           </div>
                       </div>
                       <div class="col-md-6 hidden-sm hidden-xs"><div id="footer-menu">
                         <ul>
                           <li><a class="smooth-scroll" href="#home">{{ adminTrans('website' , 'home') }}</a>/</li>
                           <li><a class="smooth-scroll" href="#services">{{ adminTrans('website' , 'service') }}</a>/</li>
                           <li><a class="smooth-scroll" href="#about">{{ adminTrans('website' , 'about') }}</a>/</li>
                           <li><a class="smooth-scroll" href="#team">{{ adminTrans('website' , 'team') }}</a>/</li>
                         </ul>
                       </div></div>
                     </div>
                   </div>
                 </div>

                <a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" role="button">
                  <i class="fa fa-angle-up"></i>
                </a>
            </footer>


    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>

    <!-- Bootstrap  Js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" ></script>

    <!-- WOW  Js -->
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}" ></script>

    <!--  magnific popup  -->
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}" ></script>

    <!--  OWL carousel  -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}" ></script>

    <!--  Counter  -->
    <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}" ></script>

    <!--Easing js  -->
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}" ></script>

    <!-- Particles js  -->
    <script type="text/javascript" src="{{ asset('js/particles.min.js') }}" ></script>

    <!-- Custom js  -->
    <script type="text/javascript" src="{{ asset('js/script.js') }}" ></script>

    @include('layouts.js')
</body>
</html>
