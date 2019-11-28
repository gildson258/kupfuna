<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kupfuna</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{url('assets/images/favicon.ico')}}"/>
    <!-- Font Awesome -->
    <link href="{{url('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/slick.css')}}"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{url('assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/animate.css')}}"/>  
     <!-- estilos css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/estilos.css')}}"/>  
     <!-- Theme color -->
    <link id="switcher" href="{{url('assets/css/theme-color/default.css')}}" rel="stylesheet">
    
    <link href="{{url('preloader.css')}}" rel="stylesheet">
    <!-- Main Style -->
    <link href="{{url('style.css')}}" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  
		@yield('html_estructure')

		
	<!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
                <!--<a class="footer-logo" href="#"><img src="assets/images/logo.jpg" alt="Logo"></a>  -->            
              <div class="footer-social">
                <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Mantido por <a rel="nofollow" href=""><span>Grupo X</span></a></p>
    </div>
  </footer>
  <!-- End Footer -->


  <!-- initialize jQuery Library --> 
  <script src="{{url('assets/js/jquery.min.3.4.1.js')}}"></script>

  <!-- initialize jQuery Library --> 
  <script src="{{url('assets/js/jquery.min.js')}}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="{{url('assets/js/bootstrap.js')}}"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="{{url('assets/js/slick.js')}}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{url('assets/js/waypoints.js')}}"></script>

  <script type="text/javascript" src="{{url('assets/js/jquery.counterup.js')}}"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="{{url('assets/js/jquery.mixitup.js')}}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{url('assets/js/jquery.fancybox.pack.js')}}"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="{{url('assets/js/wow.js')}}"></script> 
  <!-- Bootstrap validator -->
  <script type="text/javascript" src="{{url('assets/js/validator.min.js')}}"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="{{url('assets/js/custom.js')}}"></script>
  <!-- Validacao js -->
  <script type="text/javascript" src="{{url('assets/js/validacao.js')}}"></script>
  
    
    
  </body>
</html>