@extends('regheader')

@section('content')
<h3 align="center">Reset Password</h3>
<div class="row" style="margin-left: 230px;margin-top: 50px;">
	<form class="col s12" method="POST" action="{{ route('password.email') }}">
		{{ csrf_field() }}
		@if (session('status'))
                        
                        {{ session('status') }}
                        	<script type="text/javascript">
                       
                          	 material_alert("hey");
                          	 
                       		</script>
                       
         @endif
		<div class="row">
        <div class="input-field col s8">
          <i class="material-icons prefix">email</i>
          <input id="icon_prefix" type="email" class="validate" name="email" value="{{ old('email') }}"  autofocus>
          @if ($errors->has('email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif
          <label for="icon_prefix">E-Mail Address</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light " type="submit" >Send Password Reset Link
		   <i class="material-icons right">send</i>
	  </button>
	</form>
</div>


@endsection