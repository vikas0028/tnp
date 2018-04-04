@extends('admin.index')

@section('AdminContent')
<div class="content-wrapper">
<div class="container-fluid" id="app">
	<ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="./">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Placement Gallery</li>
    </ol>
    <div class="card">
    	<div class="card-body">
    		<form action="/admin/Gallery/insert" method="POST" enctype="multipart/form-data">
    			 {{ csrf_field() }}
    			<div class="form-row">
    				<div class="col-4">
							<label for="year">year</label>
							<select name="year" id="year"  class="custom-select  col-3" required>
							  <option selected disabled>Year</option>
							  <option value="2018" >2018</option>
							  <option value="2019">2019</option>
							  
							</select>
					</div>
					<div class="col-4">
						<label for="img">Select Images</label>
						<input type="file" name="img[]" multiple="true">
					</div>
    			</div>
    			{{-- @if($success != "")
                    <div class="alert alert-success">
                      {{ $success }}
                   </div>
                @endif --}}
    			<button type="submit" class="btn btn-info" >Upload</button>
    		</form>
    	</div>
    </div>
 </div>
</div>


@endsection()