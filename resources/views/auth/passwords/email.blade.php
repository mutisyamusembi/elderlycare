<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eldercare Reset</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Eldercare</title>
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="/css/util.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
	<!--===============================================================================================-->

	<style>

.loader-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #242f3f;
  display:flex;
  justify-content: center;
  align-items: center;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}
@keyframes loader {
  0% { transform: rotate(0deg);}
  25% { transform: rotate(180deg);}
  50% { transform: rotate(180deg);}
  75% { transform: rotate(360deg);}
  100% { transform: rotate(360deg);}
}
@keyframes loader-inner {
  0% { height: 0%;}
  25% { height: 0%;}
  50% { height: 100%;}
  75% { height: 100%;}
  100% { height: 0%;}
}



    </style>

	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-25 p-b-20">
				
						<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
							@csrf
						<span class="login100-form-title p-b-70">
							We're human, it happens. 
						</span>

                        
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
						<div class="wrap-input100 validate-input m-t-5 m-b-35" data-validate = "Enter Email">
							<input class="input100" type="email" name="email">
							<span class="focus-input100" data-placeholder="Email"></span>
	
							@error('serial')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
						</div>
	
						
	
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Send Password
							</button>
						</div>
	
						<ul class="login-more p-t-40">
							<li class="m-b-8">
								
	
								<a href="{{ route('login') }}" class="txt2">
									Login
								</a>
							</li>
	
							<li>
								<span class="txt1">
									Create new Account
								</span>
	
								<a href="{{ route('register') }}" class="txt2">
									Register 
								</a>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		
		
	
		<div id="dropDownSelect1"></div>
		
	<!--===============================================================================================-->
		<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/bootstrap/js/popper.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/daterangepicker/moment.min.js"></script>
		<script src="/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="/js/main.js"></script>

		<div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
	
	</body>
	</html>
