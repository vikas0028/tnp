@extends('main')

@section('content')
	
	<ul class="collapsible popout" data-collapsible="accordion">
		
			
		  <li>
		    <div class="collapsible-header ">
				Information Technology			      
		     </div>
		    <div class="collapsible-body">
		    	<ul class="collapsible popout" data-collapsible="accordion">
		    
		    		<li>
			    		<div class="collapsible-header">
			    			2018
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($ITcom2018 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    			
			    		</div>
		    		</li>
		    		<li>
			    		<div class="collapsible-header">
			    			2019
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($ITcom2019 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    		</div>
		    		</li>
				
				</ul>    	
		    </div>
		  </li>
		  <li>
		    <div class="collapsible-header ">
				Computer Engineering			      
		     </div>
		    <div class="collapsible-body">
		    	<ul class="collapsible popout" data-collapsible="accordion">
		    
		    		<li>
			    		<div class="collapsible-header">
			    			2018
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($CEcom2018 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    		</div>
		    		</li>
		    		<li>
			    		<div class="collapsible-header">
			    			2019
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($CEcom2019 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    		</div>
		    		</li>
				
				</ul>    	
		    </div>
		  </li>
		  <li>
		    <div class="collapsible-header ">
				Mechnical			      
		     </div>
		    <div class="collapsible-body">
		    	<ul class="collapsible popout" data-collapsible="accordion">
		    
		    		<li>
			    		<div class="collapsible-header">
			    			2018
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($MECHcom2018 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    		</div>
		    		</li>
		    		<li>
			    		<div class="collapsible-header">
			    			2019
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($MECHcom2019 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    		</div>
		    		</li>
				
				</ul>    	
		    </div>
		  </li>
		  <li>
		    <div class="collapsible-header ">
				Electrical and Communication			      
		     </div>
		    <div class="collapsible-body">
		    	<ul class="collapsible popout" data-collapsible="accordion">
		    
		    		<li>
			    		<div class="collapsible-header">
			    			2018
			    		</div>
			    		<div class="collapsible-body">
			    		<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($ECcom2018 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>	
			    		</div>
		    		</li>
		    		<li>
			    		<div class="collapsible-header">
			    			2019
			    		</div>
			    		<div class="collapsible-body">
			    			<table>
			    				<thead>
			    					<tr>
			    						<th>Name</th>
			    						<th>Student Placed</th>
			    						<th>Package</th>
			    					</tr>
			    				</thead>
			    				<tbody>
			    					@foreach($ECcom2019 as $i)
			    					@if($i != "")
			    					<tr>
			    						<td><a href="/placementrecord/{{ $i->name }}">{{ $i->name }}</a></td>
			    						<td>{{ $i->student_placed }}</td>
			    						<td>{{ $i->package }}</td>
			    					</tr>
			    					@endif
			    					@endforeach
			    				</tbody>
			    			</table>
			    		</div>
		    		</li>
				
				</ul>    	
		    </div>
		  </li>
	  	
	  	
	</ul>

@endsection