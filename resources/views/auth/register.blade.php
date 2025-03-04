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
							<h1 class="mb-3">Register</h1>
                            <form method="POST" action="{{ route('register') }}">
                               @csrf
								<div class="form-group">
									<input id="name" class="form-control"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  placeholder="Name"> </div>
								<div class="form-group">
									<input id="email" class="form-control"  type="email" name="email" :value="old('email')" required autocomplete="username"placeholder="Email"> 
                                    <input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                    
								<div class="form-group">
									<input class="form-control"id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                                    <input-error :messages="$errors->get('password')" class="mt-2" /> 
                                </div>
                                    
								<div class="form-group">
									<input class="form-control"id="password_confirmation"name="password_confirmation" required autocomplete="new-password" type="password" placeholder="Confirm Password">
                                    <input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                 </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('admin.javascript')
</body>

</html>
