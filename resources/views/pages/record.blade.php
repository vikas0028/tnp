@extends('main')

@section('content')
	<h3 align="center"> Placement Record </h3>
	<ul class="collapsible popout" data-collapsible="accordion">
		@foreach($data as $d)	
		  <li>
		    <div class="collapsible-header ">
		      
		      Placement Record for {{ $d->year }} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		      Companies Visited {{ $d->companies_visited }}
		      <span class="badge">Students Placed {{ $d->students_placed }}</span></div>
		    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
		  </li>
	  	@endforeach
	</ul>

@endsection