<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
   
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Training and Placement Cell</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Login</a></li>
        <li><a href="badges.html">Register</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Login</a></li>
        <li><a href="badges.html">Register</a></li>
      </ul>
    </div>
    <div class="nav-content" align="center">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#">Home</a></li>
        <li class="tab"><a  href="http://127.0.0.1:8000/placementrecord">Placement Record</a></li>
        <li class="tab"><a href="http://127.0.0.1:8000/associatedrecruiter">Associated Recruiters</a></li>
        <li class="tab"><a href="http://127.0.0.1:8000/recruiterspeak">Recruiters Speak</a></li>
        <li class="tab"><a href="http://127.0.0.1:8000/">Placement gallery</a></li>
      </ul>
    </div>
</nav>
<div class="container">

@yield('content')

</div> 
<footer class="page-footer fixed-bottom">
  <div class="footer-copyright">
    <div class="container" align="center">
    © 2018 Government Engineering College Modasa
    
    </div>
  </div>
</footer>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>