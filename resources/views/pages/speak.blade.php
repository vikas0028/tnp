@extends('main')

@section('content')
{{-- <h3 align="center">Recruiter Speak</h3> --}}
<div class="row">
    <div class="col s12 m12">
    	@foreach($data as $d)
	      <div class="card">
	        
	         
	          <span class="card-title">
	          <div class="center-align">	<strong>{{ $d->company }}</strong></div>
	          </span>
	         
	       
	        <div class="card-content">
	          <p>{{ $d->speak }}</p>
	        </div>
	        <div class="card-action">
	          <a href="#">Designation:-  {{ $d->position }}</a>
	        </div>
	      </div>
	     @endforeach
	      
    </div>
  </div>

@endsection