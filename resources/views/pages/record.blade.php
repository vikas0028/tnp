@extends('main')

@section('content')
	
	<ul class="collapsible popout" data-collapsible="accordion">
		@foreach($branch as $b)
			
		  <li>
		    <div class="collapsible-header ">
					{{ $b->branch }}		      
		     </div>
		    <div class="collapsible-body">
		    	@foreach($data as $d)
		    		@if($d->branch == $b->branch)
		    			{{ $d->name }}
		    		@endif
				@endforeach    	
		    </div>
		  </li>
	  	
	  	@endforeach
	</ul>

@endsection