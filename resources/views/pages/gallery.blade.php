@extends('main')

@section('content')
<div class="row">
	@foreach($data as $d)
	<div class="col s6 m4">
	  <div class="card small" style="height: 160px;">
	    <div class="card-image" style="max-height: 84%;">
	      <img src="{{url('/gallery')}}/{{ $d->img }}" >
	      
	    </div>
	   <div  class="center-align">

	  {{-- <a href="/pla"> <strong>Year : {{ $d->year }}</strong></a> --}}
	  <form method="POST" action="{{url('/placementgallery/')}}/{{ $d->year }}">
	  	<input type="hidden" name="year" value="{{ $d->year }}">
	  	{{ csrf_field() }}
	  	<button type="submit" class="btn" >View Image :-{{ $d->year }}</button>
	  </form>
	   </div>
	    
	  </div>
	</div>
	@endforeach	
</div>

@endsection()