<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.10.3/css/nanogallery.min.css">
    <link rel="shortcut icon" href="/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
      .content-max-height{
       min-height:75vh; 
      }
       .carousel-item { height: 70vh!important; }
    </style>
</head>
<body class="blue-grey lighten-5">
   
<nav class="nav-extended teal">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo hide-on-med-and-down">Training and Placement Cell</a>
      <a href="#" class="brand-logo hide-on-large-only ">TNP Cell</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{url('login')}}">Login</a></li>
        <li><a href="{{url('register')}}">Register</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{url('login')}}">Login</a></li>
        <li><a href="{{url('register')}}">Register</a></li>
      </ul>
    </div>
    <?php 
      $r_name = Route::currentRouteName();
      // die($r_name);
        $ac1 = $r_name == 'root' ? 'active' : "";
        $ac2 = $r_name == 'placementrecord' ? 'active' : "";
        $ac3 = $r_name == 'associatedrecruiter' ? 'active' : "";
        $ac4 = $r_name == 'recruiterspeak' ? 'active' : "";
        $ac5 = $r_name == 'placementgallery' ? 'active' : "";
    ?>
    <div class="nav-content container" align="center">
      <ul class="tabs tabs-transparent">
        <li class="tab {{ $ac1 }}"><a class='{{ $ac1 }}' target="_self" href="{{url('/')}}" href="#">Home</a></li>
        <li class="tab {{ $ac2 }}"><a class='{{ $ac2 }}' target="_self" href="{{url('/placementrecord')}}">Placement Record</a></li>
        <li class="tab {{ $ac3 }}"><a class='{{ $ac3 }}' target="_self" href="{{url('/associatedrecruiter')}}">Associated Recruiters</a></li>
        <li class="tab {{ $ac4 }}"><a class='{{ $ac4 }}' target="_self" href="{{url('/recruiterspeak')}}">Company Feedback</a></li>
        <li class="tab {{ $ac5 }}"><a class='{{ $ac5 }}' target="_self" href="{{url('/placementgallery')}}">Placement gallery</a></li>
      </ul>
    </div>
</nav>
<div class="container content-max-height">
<div class="row"></div>
@yield('content')

</div> 
<footer class="page-footer teal fixed-bottom">
  <div class="footer-copyright">
    <div class="container" align="center">
    © 2018 Government Engineering College Modasa
    </div>
  </div>
</footer>   
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/materialize.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nanogallery/5.10.3/jquery.nanogallery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
        $(".button-collapse").sideNav();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
      
      setInterval(function(){
        $('.carousel').carousel('next');
      },3000);

      $("#nanoGallery1").nanoGallery({
        kind:'flickr',
        userID:'34858669@N00'
      });
  })
</script>
</body>
</html>