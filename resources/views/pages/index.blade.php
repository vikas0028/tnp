@extends('main')

@section('content')
<!-- <h4 class="center" > <strong>Government Engineering College Modasa</strong></h4> -->
 <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a href="/register" class="btn waves-effect blue darken-3 darken-text-2">Register Now !!</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      {{-- <h2>GEC Modasa</h2>
      <p class="white-text">Great Place to Study.</p> --}}
      <img src="/slide/slide.jpg" style="height: 450px;width: 944px;">
    </div>
    <div class="carousel-item amber white-text" href="#two!">
     {{--  <h2>Training &amp; Placement Cell</h2>
      <p class="white-text">Lead by Dr. Mahesh Goyani. </p> --}}
      <img src="/slide/slide1.jpg" style="height: 450px;width: 944px;">
    </div>
    <div class="carousel-item green white-text" href="#three!">
    {{--   <h2>Campus Placements</h2>
      <p class="white-text">Companies in our campus</p> --}}
      <img src="/slide/slide2.jpg" style="height: 450px;width: 944px;">
    </div>
    <div class="carousel-item green white-text" href="#three!">
    {{--   <h2>Campus Placements</h2>
      <p class="white-text">Companies in our campus</p> --}}
      <img src="/slide/slide3.jpg" style="height: 450px;width: 944px;">
    </div>
<!--     <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div> -->
  </div>

@endsection
