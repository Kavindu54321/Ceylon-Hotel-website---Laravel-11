
<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.head')
</head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="assets/img/logo.jpeg" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<form method="POST" action="{{ route('login') }}">
                            @csrf
								<div class="form-group">
									<input class="form-control"id="email" type="email" name="email":value="old('email')" required autofocus autocomplete="username" placeholder="Email"> </div>
								<div class="form-group">
									<input class="form-control"  id="password"type="password"name="password"  required autocomplete="current-password"  placeholder="Password"> </div>
                                    <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
 

							<div class="text-center forgotpass">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a> 
                             @endif
                            </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register')}}">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('admin.javascript')
</body>

</html>
