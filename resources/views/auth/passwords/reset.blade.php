@extends('regheader')

@section('content')
<h3 align="center">Reset Password</h3>
<div class="row" style="margin-left: 230px;margin-top: 50px;">
	<form class="col s12" method="POST" action="{{ route('password.request') }}">
		{{ csrf_field() }}
		<input type="hidden" name="token" value="{{ $token }}">
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
      <div class="row">
      	<div class="input-field col s8">
          <i class="material-icons prefix">lock</i>
          <input type="Password" name="password" class="validate {{ $errors->has('password') ? ' has-error' : '' }}" required autofocus>
          @if ($errors->has('password'))
	            <span class="help-block">
	                <strong>{{ $errors->first('password') }}</strong>
	            </span>
	        @endif
          <label for="icon_telephone">Password</label>
        </div>
      	
      </div>
      <div class="row">
      	<div class="input-field col s8">
          <i class="material-icons prefix">lock</i>
          <input type="Password" name="password_confirmation" class="validate {{ $errors->has('password_confirmation') ? ' has-error' : '' }}" required autofocus>
          	@if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          <label for="icon_telephone">password confirmation</label>
        </div>
      	
      </div>
      <button class="btn waves-effect waves-light " type="submit"  >Reset Password
		   <i class="material-icons right">send</i>
	  </button>
	</form>
</div>
<script type="text/javascript">
	
</script>

@endsection