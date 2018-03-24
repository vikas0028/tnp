@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
<div class="container-fluid" id="app">
	<ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="./">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Recruiter Speak</li>
    </ol>
    <div class="card">
    	<div class="card-body">
    		<form action="/admin/Recruiter/insert" method="post" >
    			{{ csrf_field() }}
    			<div class="form-row">
					<div class="col-3">
							<label for="name">Name</label>
							<input type="text"  name="name" id="name" class="form-control" placeholder="Recruiter Name" value="jay" required>
					</div>
					<div class="col-3">
							<label for="company"> Company Name</label>
							<input type="text"  name="company" id="company" class="form-control" placeholder="Companiy Name" value="Sellnews" required>
					</div>
					<div class="col-3">
							<label for="position">Designation</label>
							<input type="text"  name="position" id="position" class="form-control" placeholder="Designation" value="HR" required>
					</div>
					<div class="col-3">
							<label for="contact"> Company Contact</label>
							<input type="number"  name="contact" id="contact" class="form-control" placeholder="Companiy Name" value="9758362214" required>
					</div>
				</div>
				<div class="form-row" style="margin-top: 10px;">
					<div class="col-12">
						<label for="speak">Speak</label>
						<textarea class="form-control" id="speak" name="speak"></textarea>
					</div>
					
				</div>
				<div class="form-row" style="margin-top: 10px;">
				<button class="btn btn-info" type="submit">Add</button>
				</div>
    		</form>
    		
    	</div>
    	
    </div>
    <hr>
    <div class="card">
    	<div class="card-header">
    		Recruiter Speaks
    	</div>
    	<div class="card-body">
    		<table class="table">
    			<thead>
    				<tr>
    					<td>Name</td>
    					<td>Company</td>
    					<td>Designation</td>
    					<td colspan="2">Action</td>
    				</tr>
    			</thead>
    			<tbody>
    				@foreach($rec as $r)
    				<tr>
    					<td>{{ $r->name }}</td>
    					<td>{{ $r->company }}</td>
    					<td>{{ $r->position }}</td>
    					<td>
    						<a href="/admin/Recruiter/edit/{{ $r->id }}" class="btn btn-info">Edit</a>
    					</td>
    					<td>
    						<form action="/admin/Recruiter/delete" method="post">
    							{{ csrf_field() }}
    							<input type="hidden" name="id" value="{{ $r->id }}">
    							<button class="btn btn-danger" type="submit">Delete</button>
    						</form>
    					</td>
    				</tr>
    				@endforeach
    			</tbody>
    			
    		</table>
    	</div>
    </div>

</div>
</div>

@endsection