<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="shortcut icon" href="/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
	<link rel="stylesheet" href="/css/gal_style.css">

    <style type="text/css">
      .content-max-height{
       min-height:75vh; 
      }
      .m-p-g__controls-arrow:focus{
      	background:transparent!important;
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

<br>
<div class="m-p-g">
	<div class="m-p-g__thumbs" data-google-image-layout data-max-height="200">
		<img src="http://unsplash.it/600/400?image=940" data-full="http://unsplash.it/1200/800?image=940" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/640/450?image=906" data-full="http://unsplash.it/1280/900?image=906" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/550/420?image=885" data-full="http://unsplash.it/1100/840?image=885" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/650/450?image=823" data-full="http://unsplash.it/1300/900?image=823" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/600/350?image=815" data-full="http://unsplash.it/1200/700?image=815" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/560/500?image=677" data-full="http://unsplash.it/1120/1000?image=677" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/670/410?image=401" data-full="http://unsplash.it/1340/820?image=401" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/620/340?image=623" data-full="http://unsplash.it/1240/680?image=623" class="m-p-g__thumbs-img" />
		<img src="http://unsplash.it/790/390?image=339" data-full="http://unsplash.it/1580/780?image=339" class="m-p-g__thumbs-img" />
	</div>

	<div class="m-p-g__fullscreen"></div>
</div>

<script>
	var elem = document.querySelector('.m-p-g');
	document.addEventListener('DOMContentLoaded', function() {
		var gallery = new MaterialPhotoGallery(elem);
	});
</script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/material-photo-gallery.min.js'></script>

  

</body>

</html>
