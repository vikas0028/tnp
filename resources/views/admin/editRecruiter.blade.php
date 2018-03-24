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
    		<form action="/admin/Recruiter/update" method="post" >
    			{{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $rec->id }}">
    			<div class="form-row">
					<div class="col-3">
							<label for="name">Name</label>
							<input type="text"  name="name" id="name" class="form-control" placeholder="Recruiter Name" value="{{$rec->name}}" required>
					</div>
					<div class="col-3">
							<label for="company"> Company Name</label>
							<input type="text"  name="company" id="company" class="form-control" placeholder="Companiy Name" value="{{$rec->company}}" required>
					</div>
					<div class="col-3">
							<label for="position">Designation</label>
							<input type="text"  name="position" id="position" class="form-control" placeholder="Designation" value="{{$rec->position}}" required>
					</div>
					<div class="col-3">
							<label for="contact"> Company Contact</label>
							<input type="number"  name="contact" id="contact" class="form-control" placeholder="Companiy Name" value="{{$rec->contact}}" required>
					</div>
				</div>
				<div class="form-row" style="margin-top: 10px;">
					<div class="col-12">
						<label for="speak">Speak</label>
						<textarea class="form-control" id="speak" name="speak">{{ $rec->speak }}</textarea>
					</div>
					
				</div>
				<div class="form-row" style="margin-top: 10px;">
				<button class="btn btn-info" type="submit">Update</button>
				</div>
    		</form>
    		
    	</div>
    	
    </div>
    

@endsection