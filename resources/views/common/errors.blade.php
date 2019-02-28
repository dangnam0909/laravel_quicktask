
@if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
    	<strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

@if ($errors->has('password'))
  	<span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif

@if ($errors->has('name'))
	<span class="invalid-feedback" role="alert">
   		<strong>{{ $errors->first('name') }}</strong>
    </span>
@endif

@if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

@if ($errors->has('password'))
  	<span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>@lang(home.messageerror)</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
