<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<link href="{{ asset('assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="page-content">
		<div class="content-wrapper">
			<div class="card-body">
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group">
						<label for="email">{{ __('E-Mail Address') }}</label>
						<div>
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
								   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group">
						<label for="password">{{ __('Password') }}</label>
						<div>
							<input id="password" type="password"
								   class="form-control @error('password') is-invalid @enderror"
								   name="password" required autocomplete="current-password">
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group">
						<div>
							<div class="form-check"><input class="form-check-input" type="checkbox" name="remember"
														   id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="form-check-label" for="remember">
									{{ __('Remember Me') }}
								</label>
							</div>
						</div>
					</div>

					<div>
						<div>
							<button type="submit" class="btn btn-primary">
								{{ __('Login') }}
							</button>
							@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
							@endif
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

