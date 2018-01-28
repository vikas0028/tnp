<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="shortcut icon" href="/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
      .content-max-height{
       min-height:75vh; 
      }
    </style>
</head>
<body class="blue-grey lighten-5">
   
<nav class="nav-extended teal">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo hide-on-med-and-down">Training and Placement Cell</a>
      <a href="#" class="brand-logo hide-on-large-only ">TNP Cell</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
      </ul>
    </div>
    <?php 
      $r_name = Route::currentRouteName();
    ?>
    <div class="nav-content container" align="center">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class='{{  $r_name == 'root' ? 'active' : null }}' target="_self" href="/" href="#">Home</a></li>
        <li class="tab"><a class='{{  $r_name == 'placementrecord' ? 'active' : null }}' target="_self" href="/placementrecord">Placement Record</a></li>
        <li class="tab"><a class='{{  $r_name == 'associatedrecruiter' ? 'active' : null }}' target="_self" href="/associatedrecruiter">Associated Recruiters</a></li>
        <li class="tab"><a class='{{  $r_name == 'recruiterspeak' ? 'active' : null }}' target="_self" href="/recruiterspeak">Recruiters Speak</a></li>
        <li class="tab"><a class='{{  $r_name == 'placementgallery' ? 'active' : null }}' target="_self" href="/placementgallery">Placement gallery</a></li>
      </ul>
    </div>
</nav>
<div class="container content-max-height">

@yield('content')

</div> 
<footer class="page-footer teal fixed-bottom">
  <div class="footer-copyright">
    <div class="container" align="center">
    © 2018 Government Engineering College Modasa
    </div>
  </div>
</footer>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
        $(".button-collapse").sideNav();
  })
</script>
</script>
</body>
</html>